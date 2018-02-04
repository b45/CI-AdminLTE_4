window.addEventListener('DOMContentLoaded', function() {
	(function($) {
		$(document).ready(function() {

			console.log('document loaded');

			// Init iCheck
			var elem_input = $('input');
 			if (elem_input.length) {
				elem_input.iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass   : 'iradio_square-blue'
				});
			}

			// Init wysihtml5
			var elem_texterea = $('#compose-textarea');
 			if (elem_texterea.length) {
 				elem_texterea.wysihtml5();
			}
		});

		$(window).on('load', function() {

			console.log('window loaded');

		});
	})(jQuery);
});