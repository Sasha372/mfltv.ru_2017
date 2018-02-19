<?php /* Smarty version 2.6.20, created on 2017-08-10 14:32:20
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'footer.tpl', 48, false),)), $this); ?>
	<!-- SECTION: Footer -->
	<footer class="has-padding footer-bg">
		<div class="container">
			<div class="row">

<!---				<div class="col-md-3 footer-social">
					<h2>		
					<a href="http://ok.ru/group/53126446448850"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>						
					<a href="https://www.youtube.com/channel/UC2lEIPwc8ipE-rHlPHsouoA"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href="http://vk.com/club100571933"><i class="fa fa-vk" aria-hidden="true"></i></a>
					<a href="http://facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					</h2>					
				</div>				
				--->
				
				<div class="col-md-4 footer-branding">
					<img class="footer-branding-logo" src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/mfl-logo.png" alt="Synthetica freebie html5 css3 template logo">

					<p>Творчество, которое продвигает вас к успеху</p>


				</div>
			</div>
			<div class="row">
				<div class="col-md-12 footer-nav">
					<ul class="footer-primary-nav">
						<?php if ($this->_tpl_vars['live']): ?><li><a href="#intro">Эфир</a></li><?php endif; ?>
						<li><a href="<?php echo @_URL; ?>
#guests">Последние участники</a></li>
						<li><a href="<?php echo @_URL; ?>
#ng">Наш Город</a></li>
						<li><a href="<?php echo @_URL; ?>
#events">События</a></li>
						<li><a href="<?php echo @_URL; ?>
#join-ng">Подписаться</a></li>
						<?php if ($this->_tpl_vars['logged_in'] == '1' && $this->_tpl_vars['s_power'] == '1'): ?>
						<li><a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/"><?php echo $this->_tpl_vars['lang']['admin_area']; ?>
</a></li>
						<?php endif; ?>						
					</ul>
					<ul class="footer-share">
						<!--- <li><a href="http://tympanus.net/codrops/licensing/">Licence</a></li> -->
						<li><a href="#" class="share-trigger"><i class="fa fa-share"></i>Поделиться</a></li>
					</ul>
					<div class="share-dropdown">
						<ul>
							<li><a href="#" class="share-odnoklassniki"><i class="fa fa-odnoklassniki"></i></a></li>
							<li><a href="#" class="share-vk"><i class="fa fa-vk"></i></a></li>
							<li><a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					<ul class="footer-secondary-nav">
						<li><p>&copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 <?php echo @_SITENAME; ?>
. <?php echo $this->_tpl_vars['lang']['rights_reserved']; ?>
</p></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- END SECTION: Footer -->
	
	<!-- JS CDNs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/bootstrap.min.js"></script>
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/retina.min.js"></script>
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/jquery.waypoints.min.js"></script>
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/flickity.pkgd.min.js"></script>
	<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/min/scripts-min.js"></script>

<?php if ($this->_tpl_vars['p'] == 'detail' || $this->_tpl_vars['p'] == 'index'): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function () {
		var pm_elastic_player = $.cookie(\'pm_elastic_player\');
		if (pm_elastic_player == null) {
			$.cookie(\'pm_elastic_player\', \'normal\');
		}
		else if (pm_elastic_player == \'wide\') {
			$(\'#player_extend\').find(\'i\').addClass(\'icon-resize-small\');
			$(\'#secondary\').addClass(\'secondary-wide\');
			$(\'#video-wrapper\').addClass(\'video-wrapper-wide\');
			$(\'.pm-video-head\').addClass(\'pm-video-head-wide\');
		} else {
			$(\'#secondary\').removeClass(\'secondary-wide\');
			$(\'#video-wrapper\').removeClass(\'video-wrapper-wide\');
			$(\'.pm-video-head-wide\').removeClass(\'pm-video-head-wide\');
		}

	$("#player_extend").click(function() {	
		if ($(this).find(\'i\').hasClass("icon-resize-full")) {
			$(this).find(\'i\').removeClass("icon-resize-full").addClass("icon-resize-small");
		} else {
			$(this).find(\'i\').removeClass("icon-resize-small").addClass("icon-resize-full");
		}
		$(\'#secondary\').animate({
			}, 10, function() {
				$(\'#secondary\').toggleClass("secondary-wide");
		});
		$(\'#video-wrapper\').animate({
			}, 150, function() {
				$(\'#video-wrapper\').toggleClass("video-wrapper-wide");
				$(\'.pm-video-head\').toggleClass(\'pm-video-head-wide\');
		});
		if ($.cookie(\'pm_elastic_player\') == \'normal\') {
			$.cookie(\'pm_elastic_player\',\'wide\');
			$(\'#player_extend\').find(\'i\').removeClass(\'icon-resize-full\').addClass(\'icon-resize-small\');
		} else {
			$.cookie(\'pm_elastic_player\', \'normal\');
			$(\'#player_extend\').find(\'i\').removeClass(\'icon-resize-small\').addClass(\'icon-resize-full\');
		}
	return false;
  });
});
</script>
'; ?>

<?php endif; ?>



<script>
<?php echo '
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');
'; ?>


  ga('create', '<?php echo @GOOGLE_ANALYTICS_TOKEN; ?>
', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>