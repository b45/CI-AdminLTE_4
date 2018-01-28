<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<a href="<?php echo site_url('backend'); ?>" class="logo">
	<span class="logo-mini"><?php echo sprintf($title_sm, '<b>', '</b>'); ?></span>
	<span class="logo-lg"><?php echo sprintf($title_lg, '<b>', '</b>'); ?></span>
</a>

<nav class="navbar navbar-static-top">
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only"><?php echo lang('lang_toggle_navigation'); ?></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="dropdown messages-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-envelope-o"></i>
					<span class="label label-success">1</span>
				</a>
				<ul class="dropdown-menu">
					<li class="header"><?php echo sprintf(lang('lang_you_have_message'), 1); ?></li>
					<li>
						<ul class="menu">
							<li>
								<a href="<?php echo site_url('backend/message/read/1'); ?>">
									<div class="pull-left">
										<img src="{picture_users}/_default.jpg" class="img-circle" alt="default">
									</div>
									<h4>
										Support Team
										<small><i class="fa fa-clock-o"></i> 5 mins</small>
									</h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="<?php echo site_url('backend/message'); ?>"><?php echo lang('lang_view_all'); ?></a></li>
				</ul>
			</li>
			<li class="dropdown notifications-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-bell-o"></i>
					<span class="label label-warning">1</span>
				</a>
				<ul class="dropdown-menu">
					<li class="header"><?php echo sprintf(lang('lang_you_have_notification'), 1); ?></li>
					<li>
						<ul class="menu">
							<li>
								<a href="<?php echo site_url('backend/notification/read/1'); ?>">
									<i class="fa fa-users text-aqua"></i> 5 new members joined today
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="<?php echo site_url('backend/notification'); ?>"><?php echo lang('lang_view_all'); ?></a></li>
				</ul>
			</li>
			<li class="dropdown tasks-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-flag-o"></i>
					<span class="label label-danger">1</span>
				</a>
				<ul class="dropdown-menu">
					<li class="header"><?php echo sprintf(lang('lang_you_have_task'), 1); ?></li>
					<li>
						<ul class="menu">
							<li>
								<a href="<?php echo site_url('backend/task/read/1'); ?>">
									<h3>
										Design some buttons
										<small class="pull-right">20%</small>
									</h3>
									<div class="progress xs">
										<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer">
						<a href="<?php echo site_url('backend/task'); ?>"><?php echo lang('lang_view_all'); ?></a>
					</li>
				</ul>
			</li>
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="{picture_users}/_default.jpg" class="user-image" alt="default">
					<span class="hidden-xs">{user_username}</span>
				</a>
				<ul class="dropdown-menu">
					<li class="user-header">
						<img src="{picture_users}/_default.jpg" class="img-circle" alt="default">
						<p>
							{user_fullname}
							<small>Member since <?php echo date('F Y', $user_created_on); ?></small>
						</p>
					</li>
					<li class="user-body">
						<div class="row">
							<div class="col-xs-4 text-center">
								<a href="#">Followers</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Sales</a>
							</div>
							<div class="col-xs-4 text-center">
								<a href="#">Friends</a>
							</div>
						</div>
					</li>
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo site_url('backend/member/profile/' . $user_id); ?>" class="btn btn-default btn-flat"><?php echo lang('lang_profile'); ?></a>
						</div>
						<div class="pull-right">
							<a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-default btn-flat"><?php echo lang('lang_sign_out'); ?></a>
						</div>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			</li>
		</ul>
	</div>
</nav>
