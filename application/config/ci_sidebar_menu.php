<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Array structure sidebar menu
| -------------------------------------------------------------------------
|
*/
$config['array_sidebar_menu'] = array(
	'lang_main_navigation' => array(
		'lang_dashboard' => array(
			'url'     => 'backend/dashboard',
			'router'  => 'dashboard',
			'icon'    => '<i class="fa fa-dashboard"></i>',
			'submenu' => FALSE
		),
		'lang_configuration' => array(
			'url'     => FALSE,
			'router'  => 'configuration',
			'icon'    => '<i class="fa fa-cogs"></i>',
			'submenu' => array(
				'lang_interface' => array(
					'url'    => 'backend/configuration/interface',
					'router' => 'interface',
					'icon'   => '<i class="fa fa-window-maximize"></i>'
				)
			)
		)
	),
	'lang_various' => array(
		'lang_documentation' => array(
			'url'     => 'backend/documentation',
			'router'  => 'documentation',
			'icon'    => '<i class="fa fa-book text-aqua"></i>',
			'submenu' => FALSE
		),
	)
);
