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
		<link rel="canonical" href="<?php echo current_url(); ?>">
<?php

echo $dns_prefetch;
echo $stylesheet;

?>
		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
		<![endif]-->
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

<?php

echo $javascript_body;

?>

<script>
$(document).ready(function(){
	$('#submit').click(function(e){
		e.preventDefault();

		var valeur1 = $('#input1').val(),
			valeur2 = $('#input2').val(),
			csrf = $('#csrf').val();

		$.ajax({
			url: "<?php echo base_url('backend/documentation/test'); ?>",
			type: "POST",
			dataType: "json",
			data: {
				valeur1: valeur1,
				valeur2: valeur2,
				"<?= $this->security->get_csrf_token_name(); ?>": csrf
			},
			success: function(data){
				console.log(data);

				$('#csrf').val(data['csrf']);
				$('#votreid1').text(data['valeur1']);
				$('#votreid2').text(data['valeur2']);

				$("#result").html('OK');
			},
			error: function(data){
				console.log(data);
			}
		});
	});
});
</script>


	</body>
</html>