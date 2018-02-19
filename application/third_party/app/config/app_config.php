<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Base Site URL
| -------------------------------------------------------------------------
|
*/
// Possible hosts locally. You can add some if needed.
$config['host_dev'] = array('localhost', '127.0.0.1', '::1');

// Fill in the file of your project here when you develop locally.
$host_dev_dir = 'CI-AdminLTE_4';

// Fill in the domain name here when your project is online.
// Example : www.johndoe.com
//           johndoe.com
$host_prod = 'your_domain.tld';

// WARNING: Do not modify the lines below
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
| Timezone
| -------------------------------------------------------------------------
|
*/
$config['timezone'] = 'Europe/Paris';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| 0 = Disables logging, Error logging TURNED OFF
| 1 = Error Messages (including PHP errors)
| 2 = Debug Messages
| 3 = Informational Messages
| 4 = All Messages
|
*/
if (ENVIRONMENT === 'development' OR ENVIRONMENT === 'testing')
{
	$config['log_threshold'] = array(1, 2);
}
else 
{
	$config['log_threshold'] = 1;
}
