<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="nav-tabs-custom">
	<ul class="nav nav-tabs">
		<li class="{status_adm}"><a href="<?php echo site_url('backend/configuration/interface/adm'); ?>">Tab 1</a></li>
		<li class="{status_pub}"><a href="<?php echo site_url('backend/configuration/interface/pub'); ?>">Tab 2</a></li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane {status_adm}">
<?php

$out = NULL;

$array_options = array(
	'user_panel'     => 'lang_user_panel',
	'sidebar_search' => 'lang_sidebar_search'
);

echo form_open(current_url(), array('class' => 'form-horizontal'));

foreach ($array_options as $key => $value) {
	$out .= '<div class="form-group">';
	$out .= '<label class="col-sm-2 control-label">' . $value . '</label>';
	$out .= '<div class="col-sm-10">';
	$out .= '<label class="radio-inline">';
	$out .= form_radio(array('name' => $key, 'value' => '1'));
	$out .= 'YES';
	$out .= '</label>';
	$out .= '<label class="radio-inline">';
	$out .= form_radio(array('name' => $key, 'value' => '0'));
	$out .= 'NO';
	$out .= '</label>';
	$out .= '</div>';
	$out .= '</div>';
}

echo $out;

echo form_close();

?>
		</div>

		<div class="tab-pane {status_pub}">



		</div>
	</div>
</div>
