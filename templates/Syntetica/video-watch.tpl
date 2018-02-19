{include file="header.tpl" p="detail" tpl_name="video-watch"}




	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>{$category_header}</h4>
				</div>
				<div class="col-md-9">
            <h3 class="entry-title" itemprop="name">{$video_data.video_title}</h3>					
					<p>{$video_data_meta[$smarty.const.DB_META_INTRO]}</p> 

    <div class="row">
        <div class="col-md-8">
		<div id="primary" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
        {if ! $playlist}
        <div class="row">
        <div class="col-md-12">
            <div class="pm-video-head">
				          
            <meta itemprop="duration" content="{$video_data.iso8601_duration}" />
            <meta itemprop="thumbnailUrl" content="{$video_data.thumb_img_url}" />
            <meta itemprop="contentURL" content="{$smarty.const._URL2}/videos.php?vid={$video_data.uniq_id}" />
            {if $video_data.allow_embedding == 1}
			<meta itemprop="embedURL" content="{$video_data.embed_href}" />
            {/if}
            <meta itemprop="uploadDate" content="{$video_data.html5_datetime}" />
            <div class="row-fluid">
                <div class="col-md-6">
                {if $video_data.featured == 1}
                    <span class="label label-featured">{$lang.featured}</span>
                {/if}
                </div>
            </div>
            </div><!--.pm-video-head-->
        </div>
        </div>
        {/if}

<div class="row">
	<div class="col-md-12">
        <div class="pm-player-full-width">

	   	    <div id="video-wrapper">
            {if $display_preroll_ad == true}
            <div id="preroll_placeholder" class="border-radius4">
				<div class="preroll_countdown">
				{$lang.preroll_ads_timeleft} <span class="preroll_timeleft">{$preroll_ad_data.timeleft_start}</span>
				</div>
				{$preroll_ad_data.code}
				{if $preroll_ad_data.skip}
				<div class="preroll_skip_countdown">
				   {$lang.preroll_ads_skip_msg} <span class="preroll_skip_timeleft">{$preroll_ad_data.skip_delay_seconds}</span>
				</div>
				<div class="preroll_skip_button">
				<button class="btn btn-blue hide" id="preroll_skip_btn">{$lang.preroll_ads_skip}</button>
				</div>
				{/if}
				{if $preroll_ad_data.disable_stats == 0}
					<img src="{$smarty.const._URL}/ajax.php?p=stats&do=show&aid={$preroll_ad_data.id}&at={$smarty.const._AD_TYPE_PREROLL}" width="1" height="1" border="0" />
				{/if}
            </div>
            {else}
                {include file="player.tpl" page="detail"}
            {/if}
	        </div><!--#video-wrapper-->



{if $ad_3 != ''}
<div class="pm-ad-zone" align="center">{$ad_3}</div>
{/if}



		</div><!-- #primary -->
        </div><!-- .span8 -->
        {if !empty($video_data.description)}
        <div class="col-md-12">
					<p itemprop="description">{$video_data.description}</p>
		</div>					
		{/if}
					
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
</div>
</div>
</div>
{include file="footer.tpl" p="detail" tpl_name="video-watch"}
