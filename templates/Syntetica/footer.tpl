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
					<img class="footer-branding-logo" src="{$smarty.const._URL}/templates/{$template_dir}/img/mfl-logo.png" alt="Synthetica freebie html5 css3 template logo">

					<p>Творчество, которое продвигает вас к успеху</p>


				</div>
			</div>
			<div class="row">
				<div class="col-md-12 footer-nav">
					<ul class="footer-primary-nav">
						{if $live }<li><a href="#intro">Эфир</a></li>{/if}
						<li><a href="{$smarty.const._URL}#guests">Последние участники</a></li>
						<li><a href="{$smarty.const._URL}#ng">Наш Город</a></li>
						<li><a href="{$smarty.const._URL}#events">События</a></li>
						<li><a href="{$smarty.const._URL}#join-ng">Подписаться</a></li>
						{if $logged_in == '1' && $s_power == '1'}
						<li><a href="{$smarty.const._URL}/{$smarty.const._ADMIN_FOLDER}/">{$lang.admin_area}</a></li>
						{/if}						
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
						<li><p>&copy; {$smarty.now|date_format:'%Y'} {$smarty.const._SITENAME}. {$lang.rights_reserved}</p></li>
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
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/bootstrap.min.js"></script>
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/retina.min.js"></script>
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/jquery.waypoints.min.js"></script>
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/flickity.pkgd.min.js"></script>
	<script src="{$smarty.const._URL}/templates/{$template_dir}/js/min/scripts-min.js"></script>

{if $p == "detail" || $p == 'index'}
{literal}
<script type="text/javascript">
$(document).ready(function () {
		var pm_elastic_player = $.cookie('pm_elastic_player');
		if (pm_elastic_player == null) {
			$.cookie('pm_elastic_player', 'normal');
		}
		else if (pm_elastic_player == 'wide') {
			$('#player_extend').find('i').addClass('icon-resize-small');
			$('#secondary').addClass('secondary-wide');
			$('#video-wrapper').addClass('video-wrapper-wide');
			$('.pm-video-head').addClass('pm-video-head-wide');
		} else {
			$('#secondary').removeClass('secondary-wide');
			$('#video-wrapper').removeClass('video-wrapper-wide');
			$('.pm-video-head-wide').removeClass('pm-video-head-wide');
		}

	$("#player_extend").click(function() {	
		if ($(this).find('i').hasClass("icon-resize-full")) {
			$(this).find('i').removeClass("icon-resize-full").addClass("icon-resize-small");
		} else {
			$(this).find('i').removeClass("icon-resize-small").addClass("icon-resize-full");
		}
		$('#secondary').animate({
			}, 10, function() {
				$('#secondary').toggleClass("secondary-wide");
		});
		$('#video-wrapper').animate({
			}, 150, function() {
				$('#video-wrapper').toggleClass("video-wrapper-wide");
				$('.pm-video-head').toggleClass('pm-video-head-wide');
		});
		if ($.cookie('pm_elastic_player') == 'normal') {
			$.cookie('pm_elastic_player','wide');
			$('#player_extend').find('i').removeClass('icon-resize-full').addClass('icon-resize-small');
		} else {
			$.cookie('pm_elastic_player', 'normal');
			$('#player_extend').find('i').removeClass('icon-resize-small').addClass('icon-resize-full');
		}
	return false;
  });
});
</script>
{/literal}
{/if}



<script>
{literal}
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
{/literal}

  ga('create', '{$smarty.const.GOOGLE_ANALYTICS_TOKEN}', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
