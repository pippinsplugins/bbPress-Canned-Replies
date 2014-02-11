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

		var new_val = reply_box.val() == '' ?  content : reply_box.val() + "\n" + content;
		$(reply_box).val( new_val );
		
		// Support the "bbPress Enable TinyMCE Visual Tab" plugin from Jared Atchison
		$('#bbp_reply_content_ifr').contents().find('body.bbp_reply_content').html( content );
		$('.bbp-canned-replies-list').slideToggle();
		toggle.toggle();
	});
});