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
		<link rel="stylesheet" href="{assets}/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="{assets}/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{assets}/adminlte/css/adminlte.min.css">
		<link rel="stylesheet" href="{assets}/adminlte/css/skins/{theme}.min.css">
		<link rel="stylesheet" href="{assets}/wysihtml5/wysihtml5.min.css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

		<script src="{assets}/jquery/jquery.min.js"></script>
		<script src="{assets}/bootstrap/js/bootstrap.min.js"></script>
		<script src="{assets}/slimscroll/slimscroll.min.js"></script>
		<script src="{assets}/fastclick/fastclick.js"></script>
		<script src="{assets}/adminlte/js/adminlte.min.js"></script>
		<script src="{assets}/wysihtml5/wysihtml5.min.js"></script>
		<script>$(function(){$('#compose-textarea').wysihtml5();});</script>
	</body>
</html>