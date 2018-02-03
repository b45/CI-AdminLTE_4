<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Base Site URL
| -------------------------------------------------------------------------
|
*/
$config['host_dev'] = array(
	'localhost',
	'127.0.0.1',
	'::1'
);

$host_dev_dir = 'CI-AdminLTE_4';

$host_prod = 'your_domain.tld';

$domain = (in_array($_SERVER['HTTP_HOST'], $config['host_dev'], TRUE)) ? $_SERVER['HTTP_HOST'] . '/' . $host_dev_dir : $host_prod;

$config['base_url'] = ( ! empty($_SERVER['HTTPS'])) ? 'https://' . $domain : 'http://' . $domain;

/*
| -------------------------------------------------------------------------
| Index File
| -------------------------------------------------------------------------
|
*/
$config['index_page'] = '';

/*
| -------------------------------------------------------------------------
| Title
| -------------------------------------------------------------------------
|
*/
$config['title'] = 'AdminLTE';
$config['title_sm'] = '%sA%sLT';
$config['title_lg'] = '%sAdmin%sLTE';

/*
| -------------------------------------------------------------------------
| Theme
| -------------------------------------------------------------------------
|
*/
$config['theme_backend'] = 'skin-blue';

$config['theme_frontend'] = '';

/*
| -------------------------------------------------------------------------
| Directory
| -------------------------------------------------------------------------
|
*/
$config['assets_backend'] = 'assets/backend';

$config['assets_frontend'] = 'assets/frontend';

$config['upload'] = 'upload';

$config['picture_users'] = 'upload/pic_users';
