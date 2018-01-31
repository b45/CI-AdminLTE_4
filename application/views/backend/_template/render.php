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
	$stylesheet  = '<link rel="stylesheet" href="{assets}/font-awesome/css/font-awesome.min.css">';
	$stylesheet .= '<link rel="stylesheet" href="{assets}/bootstrap/css/bootstrap.min.css">';
	$stylesheet .= '<link rel="stylesheet" href="{assets}/adminlte/css/adminlte.min.css">';
	$stylesheet .= '<link rel="stylesheet" href="{assets}/adminlte/css/skins/{theme}.min.css">';
	$stylesheet .= '<link rel="stylesheet" href="{assets}/wysihtml5/wysihtml5.min.css">';

	$script_body  = '<script src="{assets}/jquery/jquery.min.js"></script>';
	$script_body .= '<script src="{assets}/bootstrap/js/bootstrap.min.js"></script>';
	$script_body .= '<script src="{assets}/slimscroll/slimscroll.min.js"></script>';
	$script_body .= '<script src="{assets}/fastclick/fastclick.js"></script>';
	$script_body .= '<script src="{assets}/adminlte/js/adminlte.min.js"></script>';
	$script_body .= '<script src="{assets}/wysihtml5/wysihtml5.min.js"></script>';
}
else
{
	$stylesheet  = '<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">';

	$stylesheet .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">';
	$stylesheet .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous">';
	$stylesheet .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css" integrity="sha256-sZVMQjkm0Ho60NDzV4Ot0OTBAK7UcaqkQOxLkTT93kQ=" crossorigin="anonymous">';
	$stylesheet .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/{theme}.min.css" integrity="sha256-dDi4GN+hJjMVQmkbeVpXkn3/qwQrL3oWvW8ukATCaPc=" crossorigin="anonymous">';
	$stylesheet .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css" integrity="sha256-Qo9dfxjSvWBpcONv1klYEjbmw13NfsOC+oARxiq49/A=" crossorigin="anonymous">';

	$script_body  = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>';
	$script_body .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>';
	$script_body .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=" crossorigin="anonymous"></script>';
	$script_body .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js" integrity="sha256-t6SrqvTQmKoGgi5LOl0AUy+lBRtIvEJ+++pLAsfAjWs=" crossorigin="anonymous"></script>';
	$script_body .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js" integrity="sha256-M/+/xbAPBtc0W7JWnReOYF+oPZq4OiOUrlP9qbv7w64=" crossorigin="anonymous"></script>';
	$script_body .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js" integrity="sha256-/pAqJaOZhKjDz1Ld/tOpZp7vnIOaMkkA5aawwwr0zfk=" crossorigin="anonymous"></script>';
}

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

		<?php echo $script_body; ?>

		<script>$(function(){$('#compose-textarea').wysihtml5();});</script>
	</body>
</html>