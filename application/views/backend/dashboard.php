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
