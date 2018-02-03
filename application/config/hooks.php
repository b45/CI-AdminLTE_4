<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Compress output
| -------------------------------------------------------------------------
|
*/
$hook['display_override'][] = array(
	'class'    => '',
	'function' => 'minify_html',
	'filename' => 'minify_html.php',
	'filepath' => 'hooks'
);
