<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
