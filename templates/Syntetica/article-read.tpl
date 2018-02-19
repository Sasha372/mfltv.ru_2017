{include file="header.tpl" p="article" tpl_name="article-read"} 

	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Участник</h4>
				</div>
				<div class="col-md-9">
    <div class="row">
        <div class="col-md-8">



        {if $logged_in && $is_admin == 'yes'}
        <a href="{$smarty.const._URL}/{$smarty.const._ADMIN_FOLDER}/article_manager.php?do=edit&id={$article.id}" rel="tooltip" class="btn btn-mini pull-right" title="{$lang.edit} ({$lang._admin_only})" target="_blank">{$lang.edit}</a>
        {/if}

        <div class="entry-post">
        {if $article.restricted == '1' && ! $logged_in}
        	<div class="restricted-video border-radius4">
			    <h2>{$lang.article_restricted_sorry}</h2>
				<p>{$lang.article_restricted_register}</p>
				<div class="restricted-login">
				{include file='user-auth-login-form.tpl'}
			    </div>
			</div>
        {else}
        	{$article.content}
		{/if}
        </div>
        </article>
<div><h3>{$article.meta[$smarty.const.DB_META_DESC]}</h3></div>
<div>	
	<div class="row form-group">
	  <div class="col-sm-1 text-center"><i class="fa fa-2x fa-odnoklassniki"></i></div>
	  <div class="col-sm-11 align-middle"><a href="{$article.meta[$smarty.const.DB_META_PROFILE_OK]}">{$article.meta[$smarty.const.DB_META_PROFILE_OK]}</a></div>
	</div>		  
	<div class="row form-group">
	  <div class="col-sm-1 text-center"><i class="fa fa-2x fa-vk"></i></div>
	  <div class="col-sm-11 align-middle"><a href="{$article.meta[$smarty.const.DB_META_PROFILE_VK]}">{$article.meta[$smarty.const.DB_META_PROFILE_VK]}</a></div>	 
	</div>
	<div class="row form-group">
		<div class="col-sm-1 text-center"><i class="fa fa-2x fa-facebook"></i></div>
		<div class="col-sm-11 align-middle"><a href="{$article.meta[$smarty.const.DB_META_PROFILE_FB]}">{$article.meta[$smarty.const.DB_META_PROFILE_FB]}</a></div>	  	  
	</div>
</div>
        {if $ad_4 != ''}
        <div class="pm-ad-zone" align="center">{$ad_4}</div>
        {/if}

		<div class="clearfix"></div>
        {if !empty($article.tags)}
        <div class="pm-article-info"><strong>{$lang.tags}</strong>: 
            {foreach name=tag_links from=$article.tags key=k item=t}
             {if $smarty.foreach.tag_links.last}
              <a href="{$t.link}" title="{$t.tag}">{$t.tag}</a> 
             {else}
              <a href="{$t.link}" title="{$t.tag}">{$t.tag}</a>, 
             {/if}
            {/foreach}
        </div>
        <hr />
        {/if}

        {if is_array($article)}
            {if $facebook_like_href != ''}
            <iframe src="http://www.facebook.com/plugins/like.php?href={$facebook_like_href}&amp;layout=standard&amp;show_faces=false&amp;width=400&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowTransparency="true"></iframe>
            {/if}
		{/if}

		 
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
</div>
</div>
</div>

{include file="footer.tpl" tpl_name="article-read"}
