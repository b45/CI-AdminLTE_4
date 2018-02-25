<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row">
	<div class="col-md-6">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Server Version</h3>
			</div>
			<div class="box-body no-padding">

<?php

$template = array(
	'table_open' => '<table class="table table-condensed table-hover">'
);

$this->table->set_template($template);


$array_server_version = array(
	array(
		'name'      => 'Apache',
		'installed' => '{apache_version}',
		'minimum'   => APACHE_MIN_VERSION,
		'available' => NULL
	),
	array(
		'name'      => 'PHP',
		'installed' => '{php_version}',
		'minimum'   => PHP_MIN_VERSION,
		'available' => NULL
	),
	array(
		'name'      => 'Zend',
		'installed' => '{zend_version}',
		'minimum'   => ZEND_MIN_VERSION,
		'available' => NULL
	),
	array(
		'name'      => 'Database {db_platform}',
		'installed' => '{db_version}',
		'minimum'   => DATABASE_MIN_VERSION,
		'available' => NULL
	)
);

$this->table->set_heading('Server', 'Installed', 'Minimum');

foreach ($array_server_version as $value)
{
	$this->table->add_row($value['name'], $value['installed'], $value['minimum']);
}

echo $this->table->generate();

$this->table->clear();

?>

			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Framework Version</h3>
			</div>
			<div class="box-body no-padding">

<?php

$result = array();

ini_set('auto_detect_line_endings', TRUE);

if (($handle = fopen('https://raw.githubusercontent.com/domProjects/CI-AdminLTE_4/master/VERSION.md','r')) !== FALSE)
{
	while (($data = fgetcsv($handle, 500, '=')) !== FALSE)
	{
		$result[$data[0]] = $data[1];
	}
}

ini_set('auto_detect_line_endings', FALSE);

$array_server_version = array(
	array(
		'name'      => 'CodeIgniter',
		'installed' => CI_VERSION,
		'minimum'   => NULL,
		'available' => $result['ver_codeigniter']
	),
	array(
		'name'      => 'AdminLTE',
		'installed' => ADMINLTE_VERSION,
		'minimum'   => NULL,
		'available' => $result['ver_adminlte']
	),
	array(
		'name'      => 'Bootstrap',
		'installed' => BOOTSTRAP_VERSION,
		'minimum'   => NULL,
		'available' => $result['ver_bootstrap']
	),
	array(
		'name'      => 'jQuery',
		'installed' => JQUERY_VERSION,
		'minimum'   => NULL,
		'available' => $result['ver_jquery']
	)
);

$this->table->set_heading('Name', 'Installed', 'Available');

foreach ($array_server_version as $value)
{
	$class_installed = $this->versioning->compare($value['installed'], $value['available']);
	$cell_installed  = array('data' => $value['installed'], 'class' => $class_installed);

	$this->table->add_row($value['name'], $cell_installed, $value['available']);
}

echo $this->table->generate();

?>
			</div>
		</div>
	</div>
</div>
