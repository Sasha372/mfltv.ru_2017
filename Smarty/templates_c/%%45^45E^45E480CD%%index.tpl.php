<?php /* Smarty version 2.6.20, created on 2018-01-16 19:35:02
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'smarty_fewchars', 'index.tpl', 346, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('tpl_name' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<header class="hero">
		<div class="carousel js-flickity">
			<div class="carousel-cell" style="background-image: url(<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-bg-01.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 class="wp1">Студийная видеозапись, презентация ваших проектов и дальнейшее продвижение в социальных сетях.</h1>
								<a href="#intro" class="btn primary wp2">Узнать больше</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
								<p>Мы предлагаем качество, и оперативность съемок. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-bg-02.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 class="wp1">Прямые трансляции ваших мероприятий</h1>
								<a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Заказать</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
								<p>Мы делаем многокамерные трансляции мероприятий</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-cell" style="background-image: url(<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-bg-04.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 class="wp1">Мы предлагаем качественное информационное освещение общественно значимых событий</h1>
								<a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Заказать</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
								<p>Видеотрансляции, фото и сопровождение в социальных сетях.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		
<?php if (( false )): ?>
			<div class="carousel-cell" style="background-image: url(<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-bg-03.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 class="wp1">Видеонаблюдение с хранием архива в облаке или на традиционных устройствах.</h1>
								<a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Заказать</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
								<p>Интеграция в существующие информационные системы.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-cell" style="background-image: url(<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-bg-05.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 class="wp1">Установка wi-fi в общественных местах </h1>
								<a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Подробнее</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
								<p>Установка порталов вай фай в общественных местах согласно законодательству с записью данных о пользователях</p>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php endif; ?>

		</div>

		<div class='mouse-container'>
			<a href="#intro">
				<div class='mouse'>
					<span class='scroll-down'></span>
				</div>
			</a>
		</div>
	</header>


<?php if ($this->_tpl_vars['live']): ?>
	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Эфир</h4>
				</div>
				<div class="col-md-9">
					<p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella. Kinfolk gluten-free lo-fi quinoa. Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out. Kale chips chillwave kickstarter photo booth cronut cold-pressed. Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag, hammock pour-over chambray viral VHS normcore.</p>
					<div class="video-player">
						<video id="video_synth" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="568" height="300" poster="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/video-cover.jpg" <?php echo 'data-setup=\'{}\''; ?>
>
							<source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
							<source src="https://vjs.zencdn.net/v/oceans.webm" type="video/webm" />
							<source src="https://vjs.zencdn.net/v/oceans.ogv" type="video/ogg" />
							<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						</video>
					</div>
					<p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella. Kinfolk gluten-free lo-fi quinoa. </p>
					<p>Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out. Kale chips chillwave kickstarter photo booth cronut cold-pressed. Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag, hammock pour-over chambray viral VHS normcore.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
<?php endif; ?>

<?php if (! $this->_tpl_vars['live']): ?>
	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Свежий выпуск журнала</h4>
				</div>
				<a href="/megazin/?path=4" class="col-md-9" target="_blank" style="width: min-content">
					<img src="/uploads/megazins/4/Page/1.jpg" height="600px" width="441px">
				</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Свежий выпуск</h4>
				</div>

				<div class="col-md-9">

<!-- <h3><?php echo $this->_tpl_vars['front_videos']['0']['list']['0']['video_title']; ?>
</h3> -->					
<p><?php echo $this->_tpl_vars['video_data_meta']['intro']; ?>
</p>

<div class="row">
<div class="col-md-10">
	   	    <div id="video-wrapper" style="margin-left: -30px">
            <?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
            <div id="preroll_placeholder" class="border-radius4">
				<div class="preroll_countdown">
				<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>
				</div>
				<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

				<?php if ($this->_tpl_vars['preroll_ad_data']['skip']): ?>
				<div class="preroll_skip_countdown">
				   <?php echo $this->_tpl_vars['lang']['preroll_ads_skip_msg']; ?>
 <span class="preroll_skip_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']; ?>
</span>
				</div>
				<div class="preroll_skip_button">
				<button class="btn btn-blue hide" id="preroll_skip_btn"><?php echo $this->_tpl_vars['lang']['preroll_ads_skip']; ?>
</button>
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['preroll_ad_data']['disable_stats'] == 0): ?>
					<img src="<?php echo @_URL; ?>
/ajax.php?p=stats&do=show&aid=<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
&at=<?php echo @_AD_TYPE_PREROLL; ?>
" width="1" height="1" border="0" />
				<?php endif; ?>
            </div>
            <?php else: ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'detail')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
	        </div><!--#video-wrapper-->
</div>
</div>

					
					<p><?php echo $this->_tpl_vars['front_videos']['0']['list']['0']['description']; ?>
</p>
				</div>
				
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
<?php endif; ?>

<?php if (( false )): ?>
	<!-- SECTION: Guests -->
	<section class="guests has-padding alternate-bg" id="guests">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Последние участники</h4>
				</div>
			</div>
			<div class="row">

			<?php $_from = $this->_tpl_vars['front_guests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fk'] => $this->_tpl_vars['front_guest']):
?> 				
				<div class="col-md-3 col-sm-6 col-xs-12">
<a href="<?php echo @_URL; ?>
/article_read.<?php echo @_FEXT; ?>
?a=<?php echo $this->_tpl_vars['front_guest']['article']['id']; ?>
&mode=preview">

					<article class="crew-member" style="background-image: url(<?php echo @_ARTICLE_ATTACH_DIR; ?>
/<?php echo $this->_tpl_vars['front_guest']['image']; ?>
">
						<figure>
							<figcaption class="overlay">
								<h2><?php echo $this->_tpl_vars['front_guest']['article']['title']; ?>
</h2>
								<p><?php echo $this->_tpl_vars['front_guest']['desc']; ?>
</p>
								<div class="crew-socials">
									<ul>
										<li><a href="#"><i class="fa fa-vk"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-odnoklassniki"></i></a>
										</li>
									</ul>
								</div>
							</figcaption>
						</figure>
					</article>
</a>

				</div>
			<?php endforeach; endif; unset($_from); ?>
			</div>

<?php endif; ?>

<?php if (( false )): ?>			
<!---			
			<div class="row skillset">
				<div class="col-md-6">
					<div class="bar-chart-wrapper">
						<h5 class="bar-chart-text">Experience Design <span class="push-right">90%</span></h5>
						<div class="bar-wrapper">
							<div class="bar" data-percentage="90%">
								<span></span>
							</div>
						</div>
					</div>
					<div class="bar-chart-wrapper">
						<h5 class="bar-chart-text">HTML5/CSS3 <span class="push-right">95%</span></h5>
						<div class="bar-wrapper">
							<div class="bar" data-percentage="95%">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bar-chart-wrapper">
						<h5 class="bar-chart-text">Interactive Prototyping <span class="push-right">80%</span></h5>
						<div class="bar-wrapper">
							<div class="bar" data-percentage="80%">
								<span></span>
							</div>
						</div>
					</div>
					<div class="bar-chart-wrapper">
						<h5 class="bar-chart-text">Visual Design <span class="push-right">90%</span></h5>
						<div class="bar-wrapper">
							<div class="bar" data-percentage="90%">
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
-->			
<?php endif; ?>
		</div>
	</section>
	<!-- END SECTION: Guests -->
	<!-- SECTION: Stats -->
	<div class="stats has-padding-tall">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 stats-container">
					<i class="icon icon-Cup"></i>
					<div class="stats-wrapper">
						<p class="stats-number" data-stop="13">13</p>
						<p class="stats-text">Участников</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 stats-container">
					<i class="icon icon-Book"></i>
					<div class="stats-wrapper">
						<p class="stats-number" data-stop="<?php echo $this->_tpl_vars['total_front_videos']; ?>
"><?php echo $this->_tpl_vars['total_front_videos']; ?>
</p>
						<p class="stats-text">Выпусков</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 stats-container">
					<i class="icon icon-Pen"></i>
					<div class="stats-wrapper">
						<p class="stats-number" data-stop="<?php echo $this->_tpl_vars['total_fpic_videos']; ?>
"><?php echo $this->_tpl_vars['total_fpic_videos']; ?>
</p>
						<p class="stats-text">Событий</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SECTION: Stats -->

<?php $_from = $this->_tpl_vars['front_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fk'] => $this->_tpl_vars['front_video']):
?>
	<!-- SECTION: NG -->
	<section class="latest-articles has-padding alternate-bg" id="ng">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<h4><?php echo $this->_tpl_vars['front_video']['cat_name']; ?>
</h4>
				</div>
				<div class="col-md-8 col-sm-8 sort">
<!---					<h5>Sort by</h5>
					<select name="article-sort" id="inputArticle-Sort" class="">
						<option value="">Experience Design</option>
						<option value="">Visual Design</option>
						<option value="">UI Patterns</option>
						<option value="">Product Design</option>
					</select>
--->
				</div>
			</div>
			<div class="row">
				<?php $_from = $this->_tpl_vars['front_video']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cat_videos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_videos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
        $this->_foreach['cat_videos']['iteration']++;
?>
				<div class="col-md-4">
					<article class="article-post">
						<a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
">

							<div class="article-image has-overlay video-js vjs-default-skin" style="background-image: url(<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
)">
		<div class="vjs-big-play-button vjs-pm-show-big-play" role="button" aria-live="polite" tabindex="0" aria-label="play video"><span aria-hidden="true"></span></div>																							
								<?php if ($this->_tpl_vars['video_data']['featured']): ?>
								<span class="featured-tag">Featured</span>
								<?php endif; ?>
							</div>
							<figure>
								<figcaption>
									<h2><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</h2>
									<p><?php echo smarty_fewchars(array('s' => $this->_tpl_vars['video_data']['excerpt'],'length' => 400), $this);?>
</p>
								</figcaption>
							</figure>
						</a>
						<ul class="article-footer">
							<li class="article-category">
								<a href="#">Product</a>
							</li>
							<li class="article-comments">
								<span><i class="fa fa-eye"></i> <?php echo $this->_tpl_vars['video_data']['views_compact']; ?>
</span>
							</li>
						</ul>
					</article>
				</div>

			<?php if (( ($this->_foreach['cat_videos']['iteration']-1) % 3 ) == 2): ?>
			</div>
			
			<div class="clearfix"></div>
			<div class="row has-top-margin">
			<?php endif; ?>
			
				<?php endforeach; endif; unset($_from); ?>
			</div>


			<div class="row is-centered">
				<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['front_video']['slug']; ?>
" class="btn secondary view-more">ВСЕ ВЫПУСКИ</a>
			</div>
		</div>
	</section>
	<!-- END SECTION: NG -->
<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'fpic_videos.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- SECTION: Join-NG -->
	<section class="get-started has-padding text-center" id="join-ng">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wp4">
					<h2>Расскажи свою историю в проекте <a href="<?php echo @ng_site_url; ?>
"><?php echo $this->_tpl_vars['lang']['ng']; ?>
</a></h2>
					<a href="<?php echo @_URL; ?>
/join_ng.php" class="btn secondary-white"><?php echo $this->_tpl_vars['lang']['join_ng']; ?>
</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Join-NG -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('p' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>