<div class="main container one-column">
<?= Yii::$service->page->widget->render('flashmessage'); ?>

	<div class="account-login">
    <div class="page-title">
        <h1>Login or Create an Account</h1>
    </div>
    <form action="<?= Yii::$service->url->getUrl("customer/account/login");  ?>" method="post" id="login-form">
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>New Customers</h2>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                </div>
				<button onclick="window.location='<?= Yii::$service->url->getUrl('customer/account/register') ?>';" type="button" title="Create an Account" class="redBtn"><em><span><i></i>REGISTER</span></em></button>
            </div>   
			<div class="col-2 registered-users">
                <div class="content">
                    <h2>Registered Customers</h2>
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                            <label for="email" class="required"><em>*</em>Email Address</label>
                            <div class="input-box">
                                <input name="editForm[email]" value="<?= $email; ?>" id="email" class="input-text required-entry validate-email" title="Email Address" type="text">
                            </div>
                        </li> 
                        <li>
                            <label for="pass" class="required"><em>*</em>Password</label>
                            <div class="input-box">
                                <input name="editForm[password]" class="input-text required-entry validate-password" id="pass" title="Password" type="password">
                            </div>
                        </li>
						<?php if($loginPageCaptcha){  ?>
						<li>
                            <label for="captcha" class="required"><em>*</em>Captcha</label>
                            <div class="input-box login-captcha">
								<input type="text" name="editForm[captcha]" value="" size=10 class="login-captcha-input"> 
								<img class="login-captcha-img"  title="点击刷新" src="<?= Yii::$service->url->getUrl('site/helper/captcha'); ?>" align="absbottom" onclick="this.src='<?= Yii::$service->url->getUrl('site/helper/captcha'); ?>?'+Math.random();"></img>
								<i class="refresh-icon"></i>
                            </div>
							<script>
							<?php $this->beginBlock('login_captcha_onclick_refulsh') ?>  
							$(document).ready(function(){
								$(".refresh-icon").click(function(){
									$(this).parent().find("img").click();
								});
							});
							<?php $this->endBlock(); ?>  
							</script>  
							<?php $this->registerJs($this->blocks['login_captcha_onclick_refulsh'],\yii\web\View::POS_END);//将编写的js代码注册到页面底部 ?>

                        </li>
						<?php }  ?>
                </div>
            </div>
        </div>
		<?= \fec\helpers\CRequest::getCsrfInputHtml();  ?>
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="buttons-set">
                    
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="buttons-set">
                    <a href="<?= Yii::$service->url->getUrl('customer/account/forgotpassword');  ?>" class="f-left">Forgot Your Password?</a>
                    <button type="submit" id="js_registBtn" class="redBtn"><em><span><i></i>SIGN IN</span></em></button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>