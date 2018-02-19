<?php /* Smarty version 2.6.20, created on 2017-08-12 09:24:24
         compiled from join_ng.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'join_ng.tpl', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'sendform')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<section class="has-padding" id="get-started">
	<div class="container">
		<div class="row">
      <div class="col-md-12">
        <div id="primary" class="tab-content">
          <div class="tab-pane active" id="contact-form">
          <h4><?php echo $this->_tpl_vars['lang']['send_join_ng']; ?>
</h4>

		  	<?php if (! isset ( $this->_tpl_vars['confirm_send'] )): ?>
          	<form class="form-horizontal" role="form" method="post" action="<?php echo @_URL; ?>
/join_ng.php">
            <fieldset>
              <div class="form-group">
                <label class="col-md-2 control-label" for="your_name"><?php echo $this->_tpl_vars['lang']['your_name']; ?>
</label>
                <div class="col-md-4">
					<input type="text" class="form-control" name="your_name" value="<?php if ($this->_tpl_vars['logged_in']): ?><?php echo $this->_tpl_vars['s_name']; ?>
<?php else: ?><?php echo $_POST['your_name']; ?>
<?php endif; ?>">
				</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="your_email"><?php echo $this->_tpl_vars['lang']['your_mobile']; ?>
</label>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="your_mobile" value="<?php echo $_POST['your_mobile']; ?>
">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="your_email"><?php echo $this->_tpl_vars['lang']['your_email']; ?>
</label>
                <div class="col-md-4">
                  <input type="email" class="form-control" name="your_email" value="<?php if ($this->_tpl_vars['logged_in']): ?><?php echo $this->_tpl_vars['s_email']; ?>
<?php else: ?><?php echo $_POST['your_email']; ?>
<?php endif; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="msg"><?php echo $this->_tpl_vars['lang']['your_interest']; ?>
</label>
                <div class="col-md-6">
                	<input type="text" class="form-control" name="your_interest" value="<?php echo $_POST['your_interest']; ?>
">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="msg"><?php echo $this->_tpl_vars['lang']['your_story']; ?>
</label>
                <div class="col-md-6">
					<textarea id="msg" name="msg" rows="4" class="form-control" placeholder=""><?php echo $_POST['msg']; ?>
</textarea>
                </div>
              </div>
				<?php if ($this->_tpl_vars['logged_in'] == 0): ?>
				<?php if ($this->_tpl_vars['spambot_prevention'] == 'securimage'): ?>
				<div class="form-group">
						<label class="col-md-2 control-label" for="imagetext"><?php echo $this->_tpl_vars['lang']['enter_captcha']; ?>
</label>

	                <div class="col-md-3">
						<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $this->_tpl_vars['lang']['enter_captcha']; ?>
">
					</div>

    	            <div class="form-group col-sm-12 col-md-3 align-top">
					<div class="row">
						<div class="col-md-10">
							<img src="<?php echo @_URL; ?>
/include/securimage_show.php?sid=<?php echo smarty_echo_securimage_sid(array(), $this);?>
" id="image" alt="" >
						</div>
						<div class="col-md-2">
							<button class="btn btn-default" onclick="document.getElementById('image').src = '<?php echo @_URL; ?>
/include/securimage_show.php?sid=' + Math.random(); return false">
							<i class="fa fa-lg fa-refresh"></i>
							</button>
						</div>
					</div>
					</div>
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['spambot_prevention'] == 'recaptcha'): ?>
				<div class="input-group">
					<div class="controls">
						<?php echo $this->_tpl_vars['recaptcha_html']; ?>

					</div>
				</div>
				<?php endif; ?>
				<?php endif; ?>
              <div class="form-group">
				<label class="col-md-2 control-label"></label>
                <div class="col-md-6">
                  <button type="submit" name="Submit" value="<?php echo $this->_tpl_vars['lang']['submit_send_join']; ?>
" class="btn btn-primary" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_send_join']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_send_join']; ?>
</button>
                </div>
              </div>
            </fieldset>
            </form>
			<?php endif; ?>

          <p class="lead"></p>
            <?php if (isset ( $this->_tpl_vars['err_captcha'] )): ?>
            <div class="alert alert-warning"><?php echo $this->_tpl_vars['err_captcha']; ?>
</div>
            <?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['err_email'] )): ?>
            <div class="alert alert-warning"><?php echo $this->_tpl_vars['err_email']; ?>
</div>
            <?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['err_msg'] )): ?>
            <div class="alert alert-warning"><?php echo $this->_tpl_vars['err_msg']; ?>
</div>
            <?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['confirm_send'] )): ?>
            <div class="alert alert-success">
            <?php echo $this->_tpl_vars['lang']['contact_msg1']; ?>

            </div>
            <?php endif; ?>


          </div>
          <!-- end pm-contact --> 
        </div>
        <!-- end tag-content --> 
      </div>
      <!-- #sidebar --> 
    </div>
    <!-- .row-fluid --> 
  </div>
  <!-- .container-fluid -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 