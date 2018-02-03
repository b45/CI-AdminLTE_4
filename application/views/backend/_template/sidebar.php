<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<section class="sidebar">
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{picture_users}/_default.jpg" class="img-circle" alt="default">
		</div>
		<div class="pull-left info">
			<p><?php echo $user_login['fullname']; ?></p>
			<a href="<?php echo site_url('backend/member/online'); ?>"><i class="fa fa-circle text-success"></i> <?php echo lang('lang_online'); ?></a>
		</div>
	</div>

	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="<?php echo lang('lang_search'); ?>">
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</form>

	{sidebar_menu}

</section>
