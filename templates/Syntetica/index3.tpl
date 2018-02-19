{include file='header.tpl' tpl_name='index'}

	<header class="hero">
		<div class="carousel js-flickity">
			<div class="carousel-cell" style="background-image: url({$smarty.const._URL}/templates/{$template_dir}/img/mfl-bg-01.jpg);">
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
			<div class="carousel-cell" style="background-image: url({$smarty.const._URL}/templates/{$template_dir}/img/mfl-bg-02.jpg);">
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

			<div class="carousel-cell" style="background-image: url({$smarty.const._URL}/templates/{$template_dir}/img/mfl-bg-04.jpg);">
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
		
{if (false)}
			<div class="carousel-cell" style="background-image: url({$smarty.const._URL}/templates/{$template_dir}/img/mfl-bg-03.jpg);">
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

			<div class="carousel-cell" style="background-image: url({$smarty.const._URL}/templates/{$template_dir}/img/mfl-bg-05.jpg);">
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

{/if}

		</div>

		<div class='mouse-container'>
			<a href="#intro">
				<div class='mouse'>
					<span class='scroll-down'></span>
				</div>
			</a>
		</div>
	</header>


<noscript><div><img src="//mc.yandex.ru/watch/24517820" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

{if $live }
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
						<video id="video_synth" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="568" height="300" poster="{$smarty.const._URL}/templates/{$template_dir}/img/video-cover.jpg" {literal}data-setup='{}'{/literal}>
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
{/if}

{if ! $live }
	<!-- SECTION: Intro -->
	<section class="block-news clearfix">
		<div class="block-newspaper">
			<h4>Свежий выпуск газеты</h4>
			<a href="/newspaper/?path=8" target="_blank" style="width: min-content">
				<img src="/uploads/newspapers/8/1.jpg" height="600px" width="441px"/>
			</a>
			<div class="row is-centered">
				<a href="/newspaper/list/" class="view-more-meg btn secondary view-more ">ВСЕ ВЫПУСКИ ГАЗЕТЫ</a>
			</div>
		</div>
		<div class="block-newsvideo">
			<h4>Свежий выпуск</h4>
			<!--{$front_videos.0.list.0.video_title}
			<p>{$video_data_meta.intro}</p>-->
			<iframe width="853" height="480" class="ifrm_new-video"
					src="https://www.youtube.com/embed/-DEq1nuvw3o"
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<div>{$front_videos.0.list.0.description}</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
{/if}

{if (false)}
	<!-- SECTION: Guests -->
	<section class="guests has-padding alternate-bg" id="guests">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Последние участники</h4>
				</div>
			</div>
			<div class="row">

			{foreach from=$front_guests key=fk item=front_guest} 				
				<div class="col-md-3 col-sm-6 col-xs-12">
<a href="{$smarty.const._URL}/article_read.{$smarty.const._FEXT}?a={$front_guest.article.id}&mode=preview">

					<article class="crew-member" style="background-image: url({$smarty.const._ARTICLE_ATTACH_DIR}/{$front_guest.image}">
						<figure>
							<figcaption class="overlay">
								<h2>{$front_guest.article.title}</h2>
								<p>{$front_guest.desc}</p>
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
			{/foreach}
			</div>

{/if}

{if (false)}			
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
{/if}
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
						<p class="stats-number" data-stop="{$total_front_videos}">{$total_front_videos}</p>
						<p class="stats-text">Выпусков</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 stats-container">
					<i class="icon icon-Pen"></i>
					<div class="stats-wrapper">
						<p class="stats-number" data-stop="{$total_fpic_videos}">{$total_fpic_videos}</p>
						<p class="stats-text">Событий</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SECTION: Stats -->

{foreach from=$front_videos key=fk item=front_video}
	<!-- SECTION: NG -->
	<section class="latest-articles has-padding alternate-bg" id="ng">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<h4>{$front_video.cat_name}</h4>
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
				{foreach from=$front_video.list key=k item=video_data name=cat_videos}
				<div class="col-md-4">
					<article class="article-post">
						<a href="{$video_data.video_href}">

							<div class="article-image has-overlay video-js vjs-default-skin" style="background-image: url({$video_data.thumb_img_url})">
		<div class="vjs-big-play-button vjs-pm-show-big-play" role="button" aria-live="polite" tabindex="0" aria-label="play video"><span aria-hidden="true"></span></div>																							
								{if $video_data.featured}
								<span class="featured-tag">Featured</span>
								{/if}
							</div>
							<figure>
								<figcaption>
									<h2>{$video_data.video_title}</h2>
									<p>{smarty_fewchars s=$video_data.excerpt length=400}</p>
								</figcaption>
							</figure>
						</a>
						<ul class="article-footer">
							<li class="article-category">
								<a href="#">Product</a>
							</li>
							<li class="article-comments">
								<span><i class="fa fa-eye"></i> {$video_data.views_compact}</span>
							</li>
						</ul>
					</article>
				</div>

			{if ($smarty.foreach.cat_videos.index mod 3) == 2}
			</div>
			
			<div class="clearfix"></div>
			<div class="row has-top-margin">
			{/if}
			
				{/foreach}
			</div>


			<div class="row is-centered">
				<a href="{$smarty.const._URL}/category.php?cat={$front_video.slug}" class="btn secondary view-more">ВСЕ ВЫПУСКИ</a>
			</div>
		</div>
	</section>
	<!-- END SECTION: NG -->
{/foreach}

{include file='fpic_videos.tpl'}

	<!-- SECTION: Join-NG -->
	<section class="get-started has-padding text-center" id="join-ng">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wp4">
					<h2>Расскажи свою историю в проекте <a href="{$smarty.const.ng_site_url}">{$lang.ng}</a></h2>
					<a href="{$smarty.const._URL}/join_ng.php" class="btn secondary-white">{$lang.join_ng}</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Join-NG -->

{include file='footer.tpl' p='index'}
