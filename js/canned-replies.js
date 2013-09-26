jQuery(document).ready(function($) {
	var toggle = $('.bbp-toggle-replies');
	toggle.on('click.bbp_canned_replies_toggle', function(e) {
		e.preventDefault();
		toggle.toggle();
		$('.bbp-canned-replies-list').slideToggle();
	});
	$('.bbp-canned-reply-insert').on('click', function(e) {
		e.preventDefault();
		var reply_id = $(this).data('id'),
			content  = $('#bbp-canned-reply-' + reply_id ).html(),
			reply_box = $('#bbp_reply_content');

		$(reply_box).val($(reply_box).val() + "\n" + content);
	});
});
