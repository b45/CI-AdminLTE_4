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
		<?php echo wg_info_box_progress('bg-aqua', '<i class="fa fa-microchip"></i>', 'Memory used', $memory_usage, $memory_usage_percent, $memory_usage . ' on ' . $memory_peak_usage); ?> 
	</div>	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php echo wg_info_box_progress('bg-aqua', '<i class="fa fa-database"></i>', 'Available disk space', $disk_free_space, $disk_use_percent, 'Used: ' . $disk_use_space . ' / Total: ' . $disk_total_space); ?>
	</div>	
</div>
