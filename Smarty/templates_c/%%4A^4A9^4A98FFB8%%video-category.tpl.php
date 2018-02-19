<?php /* Smarty version 2.6.20, created on 2017-08-10 15:22:09
         compiled from video-category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'smarty_fewchars', 'video-category.tpl', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-category")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

	<!-- SECTION: NG -->
	<section class="latest-articles has-padding alternate-bg" id="articles">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<h4><?php echo $this->_tpl_vars['gv_category_name']; ?>
</h4>
				</div>
				<div class="col-md-8 col-sm-8 sort">

				</div>
			</div>
			<div class="row">
				<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cat_videos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_videos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
        $this->_foreach['cat_videos']['iteration']++;
?>
				<div class="col-md-4">
					<article class="article-post">
						<a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
">
							<div class="article-image has-overlay" style="background-image: url(<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
)">
																
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

			<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
			<div class="row is-centered pagination pagination-centered">
			  <ul>
				<?php $_from = $this->_tpl_vars['pagination']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['pagination_data']):
?>
					<li<?php $_from = $this->_tpl_vars['pagination_data']['li']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>>
						<a<?php $_from = $this->_tpl_vars['pagination_data']['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>><?php echo $this->_tpl_vars['pagination_data']['text']; ?>
</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			  </ul>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<!-- END SECTION: NG -->

</div>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "article-read")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>