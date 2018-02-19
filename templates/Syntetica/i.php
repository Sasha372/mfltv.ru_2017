<?php
// +------------------------------------------------------------------------+
// | PHP Melody ( www.phpsugar.com )
// +------------------------------------------------------------------------+
// | PHP Melody IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have received
// | this software from someone who is not a representative of
// | PHPSUGAR, you are involved in an illegal activity.
// | ---
// | In such case, please contact: support@phpsugar.com.
// +------------------------------------------------------------------------+
// | Developed by: PHPSUGAR (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2015 PHPSUGAR. All rights reserved.
// +------------------------------------------------------------------------+
session_start();
require('config.php');
if($_POST['select_language'] == 1 || (strcmp($_POST['select_language'],"1") == 0))
{
	require_once('include/settings.php');
	
	$l_id = (int) $_POST['lang_id'];
	if( ! array_key_exists($l_id, $langs) )
	{
		$l_id = 1;
	}
	
	setcookie(COOKIE_LANG, $l_id, time()+COOKIE_TIME, COOKIE_PATH);
	exit();
}

//require_once('include/functions.php');
require_once('include/syntetica.functions.php');
require_once('include/user_functions.php');
require_once('include/islogged.php');
require_once('include/rating_functions.php');
$modframework->trigger_hook('index_top');

// define meta tags & common variables
if ('' != $config['homepage_title'])
{
	$meta_title = $config['homepage_title'];
}
else
{
	$meta_title = sprintf($lang['homepage_title'], _SITENAME);	
}
$meta_keywords = $config['homepage_keywords'];
$meta_description = $config['homepage_description'];
// end


$categories = load_categories();

$front_cats = array('ng');// ,'Events','News');
$front_videos = array();

function get_guests_list($ids) {
	$guests = array();
	
	foreach ($ids as $id) {
		if ($id > 0) {			
			
			$guest = get_article_metas($id);
			
			$sql = "SELECT id, title, article_slug FROM art_articles WHERE id = '". $id ."'";
			$result = mysql_query($sql); 
			
			if ($row = mysql_fetch_assoc($result)) 
			{	
				$guest['article']=$row;
			}
						
			$guests[$id] = $guest;
			
			mysql_free_result($result);												
		}	
	}
	
	return $guests;
}
        
foreach ($front_cats as $cats) {

	$catid = null;
	$cat_name = null;
	$cat_desc = null;

        foreach ($categories as $c_id => $c)
        {
                if ($c['tag'] == $cats)
                {                        
                        $catid = $c_id;
                        $cat_name = $c['name'];
                        $cat_desc = $c['description'];
                        break;
                        
                }
        }	
	
	$sql = "SELECT published_videos 
			FROM pm_categories
			WHERE id = '". $catid ."'";
	$result = mysql_query($sql); 
	$row = mysql_fetch_assoc($result);
	mysql_free_result($result);
	
	$total_front_videos = $row['published_videos'];
	
	unset($sql, $result, $row);
	
	$sql = "SELECT pm_videos.id AS id, uniq_id, meta_value
			 FROM pm_videos 
			 LEFT JOIN (SELECT * FROM pm_meta WHERE item_type=1 AND meta_key LIKE 'Участник') AS guests ON (pm_videos.id = guests.item_id)
			 WHERE added <= '". $time_now_minute ."'
			 AND (category LIKE '$catid' 
			 	  OR category LIKE '$catid,%' 
			 	  OR category LIKE '%,$catid' 
			 	  OR category LIKE '%,$catid,%') 
			 ORDER BY added DESC ".' LIMIT '.$config['homepage_featured_limit'];
	$ids = array();
	$uniq_ids = array();
	$guest_ids = array();	
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result))
	{
		$ids[] = $row['id'];
		$guest_ids[] = $row['meta_value'];
		$uniq_ids[] = $row['uniq_id'];	
	}
	mysql_free_result($result);
	
	$list = array();
//	if (count($ids) > 0)
//	{
//		$list = get_video_list('added', 'DESC', 0, 0, 0, $ids);
//	}

	if (count($uniq_ids) > 0)
	{
		foreach ($uniq_ids as $uniq_id) $list[]=request_video($uniq_id); //, 'detail', (bool) $config['featured_autoplay']);
	}

	
	if (count($guest_ids) > 0)
	{
		$front_guests = get_guests_list($guest_ids);
	}	

	array_push($front_videos, array('cat_name'=>$cat_name, 'cat_desc'=>$cat_desc, 'catid'=>$catid, 'slug'=>$cats, 'list'=>$list));		
}
$video_data = $front_videos[0]['list'][0];
$video_data_meta = array('intro'=>get_meta($video_data['id'],1,DB_META_INTRO)[DB_META_INTRO]);
//var_dump($front_videos[0]['list'][0]);
//var_dump($video_data_meta);
$smarty->assign('front_videos', $front_videos);
$smarty->assign('video_data', $video_data);
$smarty->assign('video_data_meta', $video_data_meta);
$smarty->assign('front_guests', $front_guests);
$smarty->assign('total_front_videos', $total_front_videos);



$fpic_cats = array('Events');// ,'Events','News');
$fpic_videos = array();


        
foreach ($fpic_cats as $cats) {

	$catid = null;
	$cat_name = null;
	$cat_desc = null;

        foreach ($categories as $c_id => $c)
        {
                if ($c['tag'] == $cats)
                {                        
                        $catid = $c_id;
                        $cat_name = $c['name'];
                        $cat_desc = $c['description'];
                        break;
                        
                }
        }	
	
	$sql = "SELECT published_videos 
			FROM pm_categories
			WHERE id = '". $catid ."'";
	$result = mysql_query($sql); 
	$row = mysql_fetch_assoc($result);
	mysql_free_result($result);
	
	$total_fpic_videos = $row['published_videos'];
	
	unset($sql, $result, $row);
	
	$sql = "SELECT id  
			 FROM pm_videos 
			 WHERE added <= '". $time_now_minute ."'
			 AND (category LIKE '$catid' 
			 	  OR category LIKE '$catid,%' 
			 	  OR category LIKE '%,$catid' 
			 	  OR category LIKE '%,$catid,%') 
			 ORDER BY added DESC".' LIMIT '.$config['homepage_featured_limit'];

	$ids = array();

	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result))
	{
		$ids[] = $row['id'];
	}
	mysql_free_result($result);
	
	$list = array();
	if (count($ids) > 0)
	{
		$list = get_video_list('added', 'DESC', 0, 0, 0, $ids);
	}

	array_push($fpic_videos, array('cat_name'=>$cat_name, 'cat_desc'=>$cat_desc, 'catid'=>$catid, 'slug'=>$cats, 'list'=>$list));		
}

$smarty->assign('fpic_videos', $fpic_videos);
$smarty->assign('total_fpic_videos', $total_fpic_videos);





$top_videos = top_videos($config['top_videos_sort'], _TOPVIDS);
$new_videos = get_video_list('added', 'desc', 0, _NEWVIDS);
$featured_videos = get_featured_video_list((int) $config['homepage_featured_limit']);
$total_featured_videos = count($featured_videos);

// pull out featured categories data
$featured_categories_data = array();
$featured_categories = ($config['homepage_featured_categories'] != '') ? unserialize($config['homepage_featured_categories']) : array();
if (count($featured_categories) > 0)
{
	load_categories();
	foreach ($_video_categories as $cid => $category_data)
	{
		$_video_categories[$cid]['url'] = make_link('category', array('tag' => $category_data['tag']));
	}
	
	foreach ($featured_categories as $k => $cid)
	{
		$featured_categories_data[$cid] = get_video_list('added', 'desc', 0, 10, $cid);
	}
}

if($config['show_tags'] == 1)
{
	$tag_cloud = tag_cloud(0, $config['tag_cloud_limit'], $config['shuffle_tags']);
	$smarty->assign('tags', $tag_cloud);
	$smarty->assign('show_tags', 1);
}

if($config['show_stats'] == 1)
{
	$stats = stats();
	$smarty->assign('stats', $stats);
	$smarty->assign('show_stats', 1);
}
//	Get latest articles
if (_MOD_ARTICLE)
{
	$articles = art_load_articles(0, $config['article_widget_limit']);

	if ( ! array_key_exists('type', $articles))
	{
		foreach ($articles as $id => $article)
		{
			$articles[$id]['title'] = fewchars($article['title'], 55);
		}
		$smarty->assign('articles', $articles);
	}
}

$playingnow = videosplaying($config['playingnow_limit']);
$total_playingnow = (is_array($playingnow)) ? count($playingnow) : 0;

if ($config['player_autoplay'] == '0' && $video['video_player'] != 'embed' && $video['source_id'] != 3) 
{
	// don't update site_views for this video. It will be updated when the user hits the play button.
}
else
{
	// in all other cases, update site_views on page load.
	if ($total_featured_videos == 1)
	{
		update_view_count($featured_videos[0]['id'], $featured_videos[0]['site_views'], false);
	}
}
// pre-roll [static] ads & subtitles
if ($total_featured_videos == 1)
{
	serve_preroll_ad('index', $featured_videos[0]);
	$smarty->assign('video_subtitles', (array) get_video_subtitles($featured_videos[0]['uniq_id']));
}

$smarty->assign('total_playingnow', $total_playingnow);
$smarty->assign('playingnow', $playingnow);

$smarty->assign('featured_videos', $featured_videos);
$smarty->assign('featured_videos_total', $total_featured_videos);
$smarty->assign('featured_channels', get_featured_channels());
$smarty->assign('new_videos', $new_videos);
$smarty->assign('top_videos', $top_videos);
$smarty->assign('categories', $_video_categories);
$smarty->assign('featured_categories_data', $featured_categories_data);
// --- DEFAULT SYSTEM FILES - DO NOT REMOVE --- //
$smarty->assign('meta_title', htmlspecialchars($meta_title));
$smarty->assign('meta_keywords', htmlspecialchars($meta_keywords));
$smarty->assign('meta_description', htmlspecialchars($meta_description));
$smarty->assign('template_dir', $template_f);
$modframework->trigger_hook('index_bottom');
$smarty->display('index3.tpl');