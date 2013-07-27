jQuery(document).ready(function($) {
	$('.bbp-show-replies').on('click.bbp_canned_replies_toggle', function(e) {
		e.preventDefault();
		$('.bbp-canned-replies-list').slideToggle();
	});
});