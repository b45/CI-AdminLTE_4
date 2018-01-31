<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Array link rel="stylesheet"
| -------------------------------------------------------------------------
|
*/
$config['array_link_rel_stylesheet'] = array(
	'font-awesome' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'font-awesome/css/font-awesome.min.css',
			'integrity'   => '',
			'crossorigin' => ''

		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'font-awesome/4.7.0/css/font-awesome.min.css',
			'integrity'   => 'sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=',
			'crossorigin' => 'anonymous'
		)
	)
);
