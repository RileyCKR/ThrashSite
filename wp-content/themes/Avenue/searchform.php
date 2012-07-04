<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
	<input type="text" name="s" id="s" value="<?php _e('Search here..', 'Avenue'); ?>" onfocus='if (this.value == "<?php _e('Search here..', 'Avenue'); ?>") { this.value = ""; }' onblur='if (this.value == "") { this.value = "<?php _e('Search here..', 'Avenue'); ?>"; }' />
	<input type="image" src="<?php bloginfo('template_directory'); ?>/images/search-button.png" value="" id="search-button">
</form>