<?php /* Smarty version 2.6.20, created on 2017-08-11 20:17:12
         compiled from article-read.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'article','tpl_name' => "article-read")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

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



        <?php if ($this->_tpl_vars['logged_in'] && $this->_tpl_vars['is_admin'] == 'yes'): ?>
        <a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/article_manager.php?do=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
" rel="tooltip" class="btn btn-mini pull-right" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
 (<?php echo $this->_tpl_vars['lang']['_admin_only']; ?>
)" target="_blank"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a>
        <?php endif; ?>

        <div class="entry-post">
        <?php if ($this->_tpl_vars['article']['restricted'] == '1' && ! $this->_tpl_vars['logged_in']): ?>
        	<div class="restricted-video border-radius4">
			    <h2><?php echo $this->_tpl_vars['lang']['article_restricted_sorry']; ?>
</h2>
				<p><?php echo $this->_tpl_vars['lang']['article_restricted_register']; ?>
</p>
				<div class="restricted-login">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-auth-login-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			    </div>
			</div>
        <?php else: ?>
        	<?php echo $this->_tpl_vars['article']['content']; ?>

		<?php endif; ?>
        </div>
        </article>
<div><h3><?php echo $this->_tpl_vars['article']['meta'][@DB_META_DESC]; ?>
</h3></div>
<div>	
	<div class="row form-group">
	  <div class="col-sm-1 text-center"><i class="fa fa-2x fa-odnoklassniki"></i></div>
	  <div class="col-sm-11 align-middle"><a href="<?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_OK]; ?>
"><?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_OK]; ?>
</a></div>
	</div>		  
	<div class="row form-group">
	  <div class="col-sm-1 text-center"><i class="fa fa-2x fa-vk"></i></div>
	  <div class="col-sm-11 align-middle"><a href="<?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_VK]; ?>
"><?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_VK]; ?>
</a></div>	 
	</div>
	<div class="row form-group">
		<div class="col-sm-1 text-center"><i class="fa fa-2x fa-facebook"></i></div>
		<div class="col-sm-11 align-middle"><a href="<?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_FB]; ?>
"><?php echo $this->_tpl_vars['article']['meta'][@DB_META_PROFILE_FB]; ?>
</a></div>	  	  
	</div>
</div>
        <?php if ($this->_tpl_vars['ad_4'] != ''): ?>
        <div class="pm-ad-zone" align="center"><?php echo $this->_tpl_vars['ad_4']; ?>
</div>
        <?php endif; ?>

		<div class="clearfix"></div>
        <?php if (! empty ( $this->_tpl_vars['article']['tags'] )): ?>
        <div class="pm-article-info"><strong><?php echo $this->_tpl_vars['lang']['tags']; ?>
</strong>: 
            <?php $_from = $this->_tpl_vars['article']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tag_links'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tag_links']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
        $this->_foreach['tag_links']['iteration']++;
?>
             <?php if (($this->_foreach['tag_links']['iteration'] == $this->_foreach['tag_links']['total'])): ?>
              <a href="<?php echo $this->_tpl_vars['t']['link']; ?>
" title="<?php echo $this->_tpl_vars['t']['tag']; ?>
"><?php echo $this->_tpl_vars['t']['tag']; ?>
</a> 
             <?php else: ?>
              <a href="<?php echo $this->_tpl_vars['t']['link']; ?>
" title="<?php echo $this->_tpl_vars['t']['tag']; ?>
"><?php echo $this->_tpl_vars['t']['tag']; ?>
</a>, 
             <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
        <hr />
        <?php endif; ?>

        <?php if (is_array ( $this->_tpl_vars['article'] )): ?>
            <?php if ($this->_tpl_vars['facebook_like_href'] != ''): ?>
            <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $this->_tpl_vars['facebook_like_href']; ?>
&amp;layout=standard&amp;show_faces=false&amp;width=400&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowTransparency="true"></iframe>
            <?php endif; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "article-read")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>