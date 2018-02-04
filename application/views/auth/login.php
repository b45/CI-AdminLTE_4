<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo current_url(); ?>">{title}</a>
	</div>

	<div class="login-box-body">
		<p class="login-box-msg"><?php echo lang('login_subheading'); ?></p>

		<div id="infoMessage"><?php echo $message; ?></div>

		<?php echo form_open(current_url()); ?>
			<div class="form-group has-feedback">
				<?php echo form_input($identity); ?>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>

			<div class="form-group has-feedback">
				<?php echo form_input($password); ?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label for="remember">
							<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
							<?php echo lang('login_remember_label'); ?>
						</label>
					</div>
				</div>
				<div class="col-xs-4">
					<?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-primary btn-block btn-flat')); ?>
				</div>
			</div>
		<?php echo form_close();?>
<!--
		<div class="social-auth-links text-center">
			<p>- OR -</p>
			<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
				<i class="fa fa-facebook"></i> Sign in using Facebook
			</a>
			<a href="#" class="btn btn-block btn-social btn-google btn-flat">
				<i class="fa fa-google-plus"></i> Sign in using Google+
			</a>
		</div>
-->
		<a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
<!--
		<br>
		<a href="<?php echo current_url(); ?>">Register a new membership</a>
-->
	</div>
</div>