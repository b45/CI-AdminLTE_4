<?php
defined('BASEPATH') OR exit('No direct script access allowed');


echo wg_info_box('bg-aqua', '<i class="fa fa-envelope-o"></i>', 'Messages', '1,410');

echo wg_info_box_progress('bg-aqua', '<i class="fa fa-bookmark-o"></i>', 'Bookmarks', '41,410', '70', '70% Increase in 30 Days');

echo wg_small_box('bg-aqua', '<i class="fa fa-shopping-cart"></i>', '150', 'New Orders', '#');

echo ui_alert('alert-danger', '<i class="icon fa fa-ban"></i>', 'Alert', 'Danger alert preview. This alert is dismissable.');

echo ui_callout('alert-danger', 'I am a danger callout', 'There is a problem that we need to fix.');

?>

<hr>

<p>test</p>

<?= form_open('backend/documentation/test', array('id' => 'myform')); ?>
	<input type="text" id="input1" name="input1" value="valeur1">
	<input type="text" id="input2" name="input2" value="valeur2">
	<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" id="csrf" value="<?= $this->security->get_csrf_hash(); ?>">
	<?= form_button(array('type' => 'submit', 'name' => 'submit', 'id' => 'submit', 'content' => 'CSRF with AJAX')); ?>
<?= form_close(); ?>


<div id="result"></div>
