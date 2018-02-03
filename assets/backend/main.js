window.addEventListener('DOMContentLoaded', function() {
	(function($) {
		$(document).ready(function() {

			console.log('document loaded');

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