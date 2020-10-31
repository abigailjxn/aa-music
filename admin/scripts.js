jQuery(document).ready(function($) {

	// Add post states
	// Not really a clear way to do this through WP hooks
	$('.wp-list-table tr').each(function(){
		if( $(this).hasClass('status-archived') && $('.subsubsub .all a').hasClass('current') ) {
			$(this).find('.column-title .row-title').after(' — <span class="post-state">Archived</span>');
		}
		if( $(this).hasClass('status-needs_info') && $('.subsubsub .all a').hasClass('current') ) {
			$(this).find('.column-title .row-title').after(' — <span class="post-state">Needs Info</span>');
		}
		if( $(this).hasClass('status-not_eligible') && $('.subsubsub .all a').hasClass('current') ) {
			$(this).find('.column-title .row-title').after(' — <span class="post-state">Not Eligible</span>');
		}
	});

	// Adding items to status drop down selectors
	// For these to work it's depending on the admin_body_class filter in functions-admin.php
	if( $('body').hasClass('post-type-project') ) {

		$("select#post_status").append("<option value='archived'>Archived</option>");
		$("select#post_status").append("<option value='needs_info'>Needs Info</option>");
		$("select#post_status").append("<option value='not_eligible'>Not Eligible</option>");

		$(".inline-edit-status select").append("<option value='archived'>Archived</option>");
		$(".inline-edit-status select").append("<option value='needs_info'>Needs Info</option>");
		$(".inline-edit-status select").append("<option value='not_eligible'>Not Eligible</option>");

		if( $('body').hasClass('status-archived') ) {
			$("select#post_status option[value='archived']").attr("selected", "selected");
			$("#post-status-display").text("Archived");
		}

		if( $('body').hasClass('status-needs_info') ) {
			$("select#post_status option[value='needs_info']").attr("selected", "selected");
			$("#post-status-display").text("Needs Info");
		}

		if( $('body').hasClass('status-not_eligible') ) {
			$("select#post_status option[value='not_eligible']").attr("selected", "selected");
			$("#post-status-display").text("Not Eligible");
		}

	}

	// Saves the text value of the manufacturer as a new meta field
	// This puts the text into the database to make the manufacture name serachable as a meta field
	// If that doesn't make sense, ask Bugsy Seagull!

	$('.acf-field[data-name="manufacturer"').find('.select2-offscreen').on('change', function() {

		var manufacturer_name =	$(this).parent('.acf-input').find('.select2-chosen').text();
		$('.acf-field[data-name="manufacturer_name"] input').val(manufacturer_name);

	});

	$('.acf-field[data-name="manufacturer_name"] input').prop('readonly', true);

	// Helper! Adds a small text so i can see the actual field name in the admin
	// That way I don't have to keep going back and forth to the ACF settings - bugsy

	$('.acf-fields .acf-label').each(function() {

		var field_name = $(this).closest('.acf-field').data('name');
		$(this).find('label').append('<p class="my-acf-field">('+ field_name +')</p>');

	});

	// Helper text for the name of each layout file
	$('.acf-fields .layout').each(function() {

		var field_name = $(this).data('layout');
		$(this).find('.acf-fc-layout-handle').append('&nbsp;&nbsp;<span class="my-acf-layout">(layouts/'+ field_name +'.php)</span>');

	});


});
