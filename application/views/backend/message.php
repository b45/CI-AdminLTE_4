<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row">
	<div class="col-md-3">
		<a href="<?php echo site_url('backend/message/compose'); ?>" class="btn btn-primary btn-block margin-bottom">Compose</a>

		<div class="box box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">Folders</h3>
				<div class="box-tools">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>

			<div class="box-body no-padding">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo site_url('backend/message'); ?>"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">1</span></a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
					<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
					<li><a href="#"><i class="fa fa-filter"></i> Junk</a></li>
					<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Inbox</h3>
				<div class="box-tools pull-right">
					<div class="has-feedback">
						<input type="text" class="form-control input-sm" placeholder="Search Mail">
						<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</div>
			</div>

			<div class="box-body no-padding">
				<div class="mailbox-controls">
					<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
					</div>
					<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
					<div class="pull-right">
						1-50/2
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
							<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</div>

				<div class="table-responsive mailbox-messages">
					<table class="table table-hover table-striped">
						<tbody>
							<tr>
								<td><input type="checkbox"></td>
								<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
								<td class="mailbox-name"><a href="<?php echo site_url('backend/message/read/1'); ?>"><b>Alexander Pierce</b></a></td>
								<td class="mailbox-subject"><b>AdminLTE 2.0 Issue - Trying to find a solution to this problem...</b></td>
								<td class="mailbox-attachment"></td>
								<td class="mailbox-date">5 mins ago</td>
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
								<td class="mailbox-name"><a href="<?php echo site_url('backend/message/read/2'); ?>">Alexander Pierce</a></td>
								<td class="mailbox-subject">AdminLTE 2.0 Issue - Trying to find a solution to this problem...</td>
								<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
								<td class="mailbox-date">28 mins ago</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="box-footer no-padding">
				<div class="mailbox-controls">
					<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
						<button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
					</div>
					<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
					<div class="pull-right">
						1-50/2
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
							<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
