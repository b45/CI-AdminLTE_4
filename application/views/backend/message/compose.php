<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row">
	<div class="col-md-3">
		<a href="<?php echo site_url('backend/message'); ?>" class="btn btn-primary btn-block margin-bottom">Back to message</a>

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
			<form>
				<div class="box-header with-border">
					<h3 class="box-title">Compose new message</h3>
				</div>

				<div class="box-body">
					<div class="form-group">
						<input class="form-control" placeholder="To:">
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Subject:">
					</div>
					<div class="form-group">
						<textarea id="compose-textarea" class="form-control" style="height:300px"></textarea>
					</div>
					<div class="form-group">
						<div class="btn btn-default btn-file">
							<i class="fa fa-paperclip"></i> Attachment
							<input type="file" name="attachment">
						</div>
						<p class="help-block">Max. 32MB</p>
					</div>
				</div>

				<div class="box-footer">
					<div class="pull-right">
						<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
					</div>
					<button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
				</div>
			</form>
		</div>
	</div>
</div>
