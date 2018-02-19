<?php /* Smarty version 2.6.20, created on 2017-08-10 17:19:40
         compiled from video-watch.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'detail','tpl_name' => "video-watch")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>




	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4><?php echo $this->_tpl_vars['category_header']; ?>
</h4>
				</div>
				<div class="col-md-9">
            <h3 class="entry-title" itemprop="name"><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</h3>					
					<p><?php echo $this->_tpl_vars['video_data_meta'][@DB_META_INTRO]; ?>
</p> 

    <div class="row">
        <div class="col-md-8">
		<div id="primary" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
        <?php if (! $this->_tpl_vars['playlist']): ?>
        <div class="row">
        <div class="col-md-12">
            <div class="pm-video-head">
				          
            <meta itemprop="duration" content="<?php echo $this->_tpl_vars['video_data']['iso8601_duration']; ?>
" />
            <meta itemprop="thumbnailUrl" content="<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
" />
            <meta itemprop="contentURL" content="<?php echo @_URL2; ?>
/videos.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
" />
            <?php if ($this->_tpl_vars['video_data']['allow_embedding'] == 1): ?>
			<meta itemprop="embedURL" content="<?php echo $this->_tpl_vars['video_data']['embed_href']; ?>
" />
            <?php endif; ?>
            <meta itemprop="uploadDate" content="<?php echo $this->_tpl_vars['video_data']['html5_datetime']; ?>
" />
            <div class="row-fluid">
                <div class="col-md-6">
                <?php if ($this->_tpl_vars['video_data']['featured'] == 1): ?>
                    <span class="label label-featured"><?php echo $this->_tpl_vars['lang']['featured']; ?>
</span>
                <?php endif; ?>
                </div>
            </div>
            </div><!--.pm-video-head-->
        </div>
        </div>
        <?php endif; ?>

<div class="row">
	<div class="col-md-12">
        <div class="pm-player-full-width">

	   	    <div id="video-wrapper">
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



<?php if ($this->_tpl_vars['ad_3'] != ''): ?>
<div class="pm-ad-zone" align="center"><?php echo $this->_tpl_vars['ad_3']; ?>
</div>
<?php endif; ?>



		</div><!-- #primary -->
        </div><!-- .span8 -->
        <?php if (! empty ( $this->_tpl_vars['video_data']['description'] )): ?>
        <div class="col-md-12">
					<p itemprop="description"><?php echo $this->_tpl_vars['video_data']['description']; ?>
</p>
		</div>					
		<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('p' => 'detail','tpl_name' => "video-watch")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>