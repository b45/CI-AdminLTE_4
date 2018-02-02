<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="{lang_code}">
	<head>
		<meta charset="{charset}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>{meta_title}</title>
<?php

if (in_array($_SERVER['HTTP_HOST'], $this->config->item('host_dev'), TRUE))
{
	$source = 'internal';
}
else
{
	$source = 'external';

	$stylesheet  = '<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">';
}

$stylesheet      = insert_stylesheet($this->config->item('array_stylesheet'), $source);
$javascript_body = insert_javascript($this->config->item('array_javascript_body'), $source);

?>
		<link rel="canonical" href="<?php echo current_url(); ?>">
		<link rel="dns-prefetch" href="https://fonts.googleapis.com">
		<link rel="dns-prefetch" href="https://fonts.gstatic.com">

		<?php echo $stylesheet; ?>

		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
		<![endif]-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="fixed sidebar-mini {theme}">
		<div class="wrapper">
			<header class="main-header">
				{tpl_header}
			</header>

			<aside class="main-sidebar">
				{tpl_sidebar}
			</aside>

			<div class="content-wrapper">
				<section class="content-header">
					{content_header_title}
					{content_header_breadcrumbs}
				</section>

				<section class="content">
					{tpl_content}
				</section>
			</div>

			<footer class="main-footer">
				{tpl_footer}
			</footer>

			<aside class="control-sidebar control-sidebar-dark">
				{tpl_control_sidebar}
			</aside>

			<div class="control-sidebar-bg"></div>
		</div>

		<?php echo $javascript_body; ?>

		<script>$(function(){$('#compose-textarea').wysihtml5();});</script>
	</body>
</html>