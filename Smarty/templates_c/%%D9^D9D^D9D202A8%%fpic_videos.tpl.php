<?php /* Smarty version 2.6.20, created on 2017-08-10 14:39:25
         compiled from fpic_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'fpic_videos.tpl', 3, false),array('modifier', 'date_format', 'fpic_videos.tpl', 53, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['fpic_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fpk'] => $this->_tpl_vars['fpic_video']):
?>
	<!-- SECTION: <?php echo $this->_tpl_vars['fpic_video']['slug']; ?>
 -->
	<section class="freebies has-padding" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['fpic_video']['slug'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
">
		<div class="container <?php echo ((is_array($_tmp=$this->_tpl_vars['fpic_video']['slug'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
-intro">
			<div class="row">
				<div class="col-md-12">
					<h4><?php echo $this->_tpl_vars['fpic_video']['cat_name']; ?>
</h4>
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
				<?php $_from = $this->_tpl_vars['fpic_video']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cat_videos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_videos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
        $this->_foreach['cat_videos']['iteration']++;
?>
				<div class="col-md-6 no-padding">
					<article class="item wp5">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="like-share-wrapper">
									<ul>
										<li>
											<div class="like-button-wrapper">
												<a href="#" class="like_button"><i class="like-counter fa fa-eye"></i></a>
												<span class="count"><?php echo $this->_tpl_vars['video_data']['views_compact']; ?>
</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="freebie-content">
									<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['video_data']['added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</span>
									<h2><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</h2>
									<div class="group">
										<a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" class="btn secondary">Смотреть</a>
									</div>
								</div>
							</figcaption>
							<img src="<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
" alt="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
">
						</figure>
					</article>
				</div>

				<?php if (( ($this->_foreach['cat_videos']['iteration']-1) % 2 ) == 1): ?>
				</div>
			
				<div class="clearfix"></div>

				<div class="row">
				<?php endif; ?>

				<?php endforeach; endif; unset($_from); ?>

				<div class="is-centered">
					<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['fpic_video']['slug']; ?>
" class="btn secondary view-more">Все записи</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: <?php echo $this->_tpl_vars['fpic_video']['slug']; ?>
 -->
	<?php endforeach; endif; unset($_from); ?>