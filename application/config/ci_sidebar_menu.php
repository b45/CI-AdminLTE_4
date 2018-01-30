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
			'icon'    => '<i class="fa fa-dashboard" aria-hidden="true"></i>',
			'submenu' => FALSE
		),
		'lang_configuration' => array(
			'url'     => FALSE,
			'router'  => 'configuration',
			'icon'    => '<i class="fa fa-cogs" aria-hidden="true"></i>',
			'submenu' => array(
				'lang_interface' => array(
					'url'    => 'backend/configuration/interface',
					'router' => 'interface',
					'icon'   => '<i class="fa fa-window-maximize" aria-hidden="true"></i>'
				)
			)
		)
	),
	'lang_various' => array(
		'lang_version' => array(
			'url'     => 'backend/version',
			'router'  => 'version',
			'icon'    => '<i class="fa fa fa-code-fork text-aqua" aria-hidden="true"></i>',
			'submenu' => FALSE
		),
		'lang_documentation' => array(
			'url'     => 'backend/documentation',
			'router'  => 'documentation',
			'icon'    => '<i class="fa fa-book text-aqua" aria-hidden="true"></i>',
			'submenu' => FALSE
		)
	)
);
