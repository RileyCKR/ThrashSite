<script type='text/javascript'>
jQuery(document).ready(function() {
	//AJAX Upload
	jQuery('.upload_button').each(function(){
		
		var clickedObject = jQuery(this);
		var clickedID = jQuery(this).attr('id');
		
		new AjaxUpload(clickedID, {
			  action: '<?php echo admin_url("admin-ajax.php"); ?>',
			  name: clickedID, // File upload name
			  data: { // Additional data to send
					action: 'pyre_upload',
					type: 'upload',
					data: clickedID },
			  autoSubmit: true, // Submit file after selection
			  responseType: false,
			  onChange: function(file, extension){},
			  onSubmit: function(file, extension){
				  this.disable(); // If you want to allow uploading only 1 file at time, you can disable upload button
			  },
			  onComplete: function(file, response) {
				  this.enable();

				  jQuery('[name="'+clickedID+'"]').val(response);

				  jQuery('.save_tip').fadeIn(400).delay(5000).fadeOut(400);
			  }
		});
	
	});

	// Save Changes
	jQuery('.save_changes').click(function(e) {
		e.preventDefault();

		var form = jQuery(this).parents('form');
		
		jQuery.ajax({
			url: '<?php echo admin_url("admin-ajax.php"); ?>',
			data: jQuery(form).serialize()+'&action=pyre_save_fields',
			type: 'POST',
			success: function() {
				jQuery('.save_tip').fadeIn(400).delay(5000).fadeOut(400);
			}
		});
	});

	// Reset Changes
	jQuery('.reset_btn').click(function(e) {
		e.preventDefault();

		var form = jQuery(this).parents('form');
		
		jQuery.ajax({
			url: '<?php echo admin_url("admin-ajax.php"); ?>',
			data: 'action=pyre_reset_fields',
			type: 'POST',
			success: function() {
				jQuery('.reset_tip').fadeIn(400).delay(5000).fadeOut(400);
				setTimeout('location.reload(true);', 1200)
			}
		});
	});

	// Main tabs
	jQuery('.main_tabs a').click(function(e) {
		e.preventDefault();

		var href = jQuery(this).attr('href')
		var parent = jQuery(href).parent();
		var name = href.replace('#', '');
		
		jQuery(this).parents('ul').find('li').removeClass('selected');
		jQuery(this).parent().addClass('selected');

		jQuery('.sub_tabs ul').fadeOut();
		jQuery('.sub_tabs').find('.'+name).fadeIn();

		jQuery(parent).find('> div.mainTab').slideUp();
		jQuery(href).slideDown();
	});
	
	// Sub tabs
	jQuery('.sub_tabs a').click(function(e) {
		e.preventDefault();

		var href = jQuery(this).attr('href')
		var parent = jQuery(href).parent();

		jQuery(this).parents('ul').find('li').removeClass('selected');
		jQuery(this).parent().addClass('selected');
		
		jQuery(parent).find('> div').slideUp();
		jQuery(href).slideDown();
	});

	// Skins
	jQuery('.skins img').live('click', function(e) {
		e.preventDefault();

		var id = jQuery(this).attr('id');
		var bg_color = jQuery(this).data('background');
		var pattern = jQuery(this).data('pattern');
		var link_color = jQuery(this).data('link');
		
		jQuery(this).parent().find('img').removeClass('selected');
		jQuery(this).addClass('selected');

		jQuery('[name=pyre_pattern]').parent().find('img').removeClass('selected');
		jQuery('#' + pattern).addClass('selected');
		
		jQuery(this).parent().find('input').val(id);

		jQuery('#pyre_bg_color').val(bg_color);
		jQuery('#colorpicker_bg_color .colorSelector').ColorPickerSetColor(bg_color);
		jQuery('#colorpicker_bg_color .colorSelector div').css('background-color', '#' + bg_color);
		
		jQuery('[name=pyre_pattern]').val(pattern);
		
		jQuery('#pyre_link_color').val(link_color);
		jQuery('#colorpicker_link_color .colorSelector').ColorPickerSetColor(link_color);
		jQuery('#colorpicker_link_color .colorSelector div').css('background-color', '#' + link_color);
	});
	
	// Images
	jQuery('.images img').live('click', function(e) {
		e.preventDefault();

		var id = jQuery(this).attr('id');

		jQuery(this).parent().find('img').removeClass('selected');
		jQuery(this).addClass('selected');
		
		jQuery(this).parent().find('input').val(id);
	});
	
	jQuery('.images img.selected').live('click', function(e) {
		e.preventDefault();

		jQuery(this).removeClass('selected');
		jQuery(this).parent().find('input').val('');
	});
});
</script>
<div class='pyre'>
	<div class='pyre_header'>
		<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/logo.png' alt='' />
	</div>
	
	<ul class='main_tabs'>
		<li class='selected'><a class='general' href='#general_settings'>General Settings</a></li>
		<li><a class='homepage' href='#homepage_settings'>Homepage Settings</a></li>
		<li><a class='posts' href='#posts_settings'>Posts Settings</a></li>
		<li><a class='appearence' href='#appearence_settings'>Appearence Settings</a></li>
	</ul>
	
	<div class='pyre_container'>
		<div class='sub_tabs'>
			<ul class='general_settings selected'>
				<li class='selected'><a href='#general'>General</a></li>
				<li><a href='#analytics'>Analytics</a></li>
				<li><a href='#social_media'>Social Media</a></li>
				<li><a href='#theme_footer'>Footer</a></li>
			</ul>
			<ul class='homepage_settings selected'>
			</ul>
			<ul class='posts_settings selected'>
			</ul>
			<ul class='appearence_settings selected'>
			</ul>
		</div>