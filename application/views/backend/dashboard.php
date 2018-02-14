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

echo wg_info_box_progress('bg-aqua', '<i class="fa fa-microchip"></i>', 'Memory used by the application server', $memory_usage, $memory_usage_percent, $memory_usage . ' on ' . $memory_peak_usage);

echo wg_info_box_progress('bg-aqua', '<i class="fa fa-database"></i>', 'Available disk space', $disk_freespace, $disk_usepercent, 'Used: ' . $disk_usespace . ' / Total: ' . $disk_totalspace);
