{include file="header.tpl" p="general" tpl_name="video-category"} 

	<!-- SECTION: NG -->
	<section class="latest-articles has-padding alternate-bg" id="articles">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<h4>{$gv_category_name}</h4>
				</div>
				<div class="col-md-8 col-sm-8 sort">

				</div>
			</div>
			<div class="row">
				{foreach from=$results key=k item=video_data name=cat_videos}
				<div class="col-md-4">
					<article class="article-post">
						<a href="{$video_data.video_href}">
							<div class="article-image has-overlay" style="background-image: url({$video_data.thumb_img_url})">
																
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

			{if is_array($pagination)}
			<div class="row is-centered pagination pagination-centered">
			  <ul>
				{foreach from=$pagination key=k item=pagination_data}
					<li{foreach from=$pagination_data.li key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>
						<a{foreach from=$pagination_data.a key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>{$pagination_data.text}</a>
					</li>
				{/foreach}
			  </ul>
			</div>
			{/if}
		</div>
	</section>
	<!-- END SECTION: NG -->

</div>
</div>
</div>

{include file="footer.tpl" tpl_name="article-read"}
