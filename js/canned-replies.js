jQuery(document).ready(function($) {
	$('.bbp-show-replies').on('click.bbp_canned_replies_toggle', function(e) {
		e.preventDefault();
		$('.bbp-canned-replies-list').slideToggle();
	});
	$('.bbp-canned-reply-insert').on('click.bpp_canned_reply_insert', function(e) {
		e.preventDefault();
		var reply_id = $(this).data('id'),
			content  = $('#bbp-canned-reply-' + reply_id ).html();

		$('#bbp_reply_content').html( content );
	});
});