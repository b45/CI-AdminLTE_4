<?php
defined('BASEPATH') OR exit('No direct script access allowed');


switch (ENVIRONMENT) {
	case 'development':
		$color = 'danger';
		break;
	case 'testing':
		$color = 'warning';
		break;
	case 'production':
		$color = 'success';
		break;
	default:
		$color = 'primary';
		break;
}

echo ui_callout('alert-' . $color, 'Type of publication', 'The server is in <span class="text-uppercase"><strong>' . ENVIRONMENT . '</strong></span> mode.');

?>

<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php echo wg_info_box_progress('bg-aqua', '<i class="fa fa-microchip"></i>', 'Memory used', $memory_use, $memory_use_percent, 'Free: ' . $memory_free . ' / Total: ' . $memory_total); ?> 
	</div>	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php echo wg_info_box_progress('bg-aqua', '<i class="fa fa-database"></i>', 'Disk space used', $disk_use, $disk_use_percent, 'Free: ' . $disk_free . ' / Total: ' . $disk_total); ?>
	</div>	
</div>
