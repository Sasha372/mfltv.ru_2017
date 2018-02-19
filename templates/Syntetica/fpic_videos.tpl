{foreach from=$fpic_videos key=fpk item=fpic_video}
	<!-- SECTION: {$fpic_video.slug} -->
	<section class="freebies has-padding" id="{$fpic_video.slug|lower}">
		<div class="container {$fpic_video.slug|lower}-intro">
			<div class="row">
				<div class="col-md-12">
					<h4>{$fpic_video.cat_name}</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 content-left">
					<p>	Молодая команда создателей контента заботиться в первую очередь о доставке гигабайт 
						информации до нашей аудитории. Наша целевая аудитория - это активные люди,, которые следует 
						за различными модными тенденциями и наслаждается жизнью. Мы пытаемся удовлетворить
						интрес в различных областях нашей жизни, таких как: здоровье, финансы, бизнес, развлеечения, 
						мода, красота, культура еда технологии и путешествия.  
					</p>
				</div>
				<div class="col-md-6 content-right">
					<p>	Почему мы не похожи на других? В отличии от других информационных продуктов мы предлагаем 
						нашей аудитории реальные и оригинальные темы, которые наполнены различными историями, 
						направлением в движении или развитии. Мы предлагаем - самый большой выбор свободного образа
						жизни для мужчин и женщин. Интеграцию в наши социальные каналы чере специальный коммуникационный 
						продукт.
</p>
				</div>
			</div>
		</div>



		<div class="container-fluid">


		
			<div class="row">
				{foreach from=$fpic_video.list key=k item=video_data name=cat_videos}
				<div class="col-md-6 no-padding">
					<article class="item wp5">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="like-share-wrapper">
									<ul>
										<li>
											<div class="like-button-wrapper">
												<a href="#" class="like_button"><i class="like-counter fa fa-eye"></i></a>
												<span class="count">{$video_data.views_compact}</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="freebie-content">
									<span class="date">{$video_data.added|date_format:"%d/%m/%Y"}</span>
									<h2>{$video_data.video_title}</h2>
									<div class="group">
										<a href="{$video_data.video_href}" class="btn secondary">Смотреть</a>
									</div>
								</div>
							</figcaption>
							<img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}">
						</figure>
					</article>
				</div>

				{if ($smarty.foreach.cat_videos.index mod 2) == 1}
				</div>
			
				<div class="clearfix"></div>

				<div class="row">
				{/if}

				{/foreach}

				<div class="is-centered">
					<a href="{$smarty.const._URL}/category.php?cat={$fpic_video.slug}" class="btn secondary view-more">Все записи</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: {$fpic_video.slug} -->
	{/foreach}
