{include file='header.tpl' p='sendform'} 
<section class="has-padding" id="get-started">
	<div class="container">
		<div class="row">
      <div class="col-md-12">
        <div id="primary" class="tab-content">
          <div class="tab-pane active" id="contact-form">
          <h4>{$lang.send_join_ng}</h4>

		  	{if !isset($confirm_send)}
          	<form class="form-horizontal" role="form" method="post" action="{$smarty.const._URL}/join_ng.php">
            <fieldset>
              <div class="form-group">
                <label class="col-md-2 control-label" for="your_name">{$lang.your_name}</label>
                <div class="col-md-4">
					<input type="text" class="form-control" name="your_name" value="{if $logged_in}{$s_name}{else}{$smarty.post.your_name}{/if}">
				</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="your_email">{$lang.your_mobile}</label>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="your_mobile" value="{$smarty.post.your_mobile}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="your_email">{$lang.your_email}</label>
                <div class="col-md-4">
                  <input type="email" class="form-control" name="your_email" value="{if $logged_in}{$s_email}{else}{$smarty.post.your_email}{/if}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="msg">{$lang.your_interest}</label>
                <div class="col-md-6">
                	<input type="text" class="form-control" name="your_interest" value="{$smarty.post.your_interest}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="msg">{$lang.your_story}</label>
                <div class="col-md-6">
					<textarea id="msg" name="msg" rows="4" class="form-control" placeholder="">{$smarty.post.msg}</textarea>
                </div>
              </div>
				{if $logged_in == 0}
				{if $spambot_prevention == 'securimage'}
				<div class="form-group">
						<label class="col-md-2 control-label" for="imagetext">{$lang.enter_captcha}</label>

	                <div class="col-md-3">
						<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="{$lang.enter_captcha}">
					</div>

    	            <div class="form-group col-sm-12 col-md-3 align-top">
					<div class="row">
						<div class="col-md-10">
							<img src="{$smarty.const._URL}/include/securimage_show.php?sid={echo_securimage_sid}" id="image" alt="" >
						</div>
						<div class="col-md-2">
							<button class="btn btn-default" onclick="document.getElementById('image').src = '{$smarty.const._URL}/include/securimage_show.php?sid=' + Math.random(); return false">
							<i class="fa fa-lg fa-refresh"></i>
							</button>
						</div>
					</div>
					</div>
				</div>
				{/if}
				{if $spambot_prevention == 'recaptcha'}
				<div class="input-group">
					<div class="controls">
						{$recaptcha_html}
					</div>
				</div>
				{/if}
				{/if}
              <div class="form-group">
				<label class="col-md-2 control-label"></label>
                <div class="col-md-6">
                  <button type="submit" name="Submit" value="{$lang.submit_send_join}" class="btn btn-primary" data-loading-text="{$lang.submit_send_join}">{$lang.submit_send_join}</button>
                </div>
              </div>
            </fieldset>
            </form>
			{/if}

          <p class="lead"></p>
            {if isset($err_captcha)}
            <div class="alert alert-warning">{$err_captcha}</div>
            {/if}
            {if isset($err_email)}
            <div class="alert alert-warning">{$err_email}</div>
            {/if}
            {if isset($err_msg)}
            <div class="alert alert-warning">{$err_msg}</div>
            {/if}
            {if isset($confirm_send)}
            <div class="alert alert-success">
            {$lang.contact_msg1}
            </div>
            {/if}


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
{include file='footer.tpl'} 
