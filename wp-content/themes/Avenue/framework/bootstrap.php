<?php
/**
 * Pyre Theme Framework
 * Developed by Muhammad Haris
 * http://mharis.net
 * http://twitter.com/mharis
 * me@mharis.net
 */

class PyreThemeFramework {
	var $theme_name;
	
	public function __construct($theme_name = 'Theme Options')
	{
		// Set theme name for menus and other stuff which will require a name
		$this->theme_name = $theme_name;
		
		// Add default options
		$this->default_options();
		
		add_action('init', array($this, 'init'));
		add_action('admin_menu', array($this, 'admin_menu'));
		
		add_action('wp_ajax_pyre_upload', array($this, 'upload'));
		add_action('wp_ajax_pyre_save_fields', array($this, 'save_fields'));
		add_action('wp_ajax_pyre_reset_fields', array($this, 'reset_fields'));
		
		add_action('wp_ajax_pyre_contact_form', array($this, 'contact_form'));
		add_action('wp_ajax_nopriv_pyre_contact_form', array($this, 'contact_form'));
		
		add_theme_support('post-formats', array('gallery', 'audio', 'video'));
	}
	
	public function default_options()
	{
		add_option('pyre_posts_featured', 'On');
		add_option('pyre_author', 'On');
		add_option('pyre_tags', 'On');
		add_option('pyre_categories', 'On');
		add_option('pyre_related', 'On');
		add_option('pyre_twitter', 'On');
		add_option('pyre_facebook', 'On');
		add_option('pyre_skins', 'light_red');
		add_option('pyre_bg_color', 'F6F6F6');
		add_option('pyre_pattern', 'pattern6');
		add_option('pyre_link_color', 'd00000');
		
		add_option('pyre_posts_navigation', 'Off');
		
		add_option('pyre_slider_effect', 'random');
		add_option('pyre_slider_speed', '3000');
		
		add_option('pyre_footer_left', 'Copyright &copy; 2011 - Avenue. All rights reserved.');
		add_option('pyre_footer_right', '<a href="http://wordpress.org">Powered by WordPress</a>');
		
		add_option('pyre_homepage_style', 'magazine');
		
		add_option('pyre_featured_slider', 'On');
	}
	
	public function init()
	{
		// Register navigation menus
		register_nav_menu('topNav', __('Top Navigation', 'Avenue')); 
		register_nav_menu('mainNav', __('Main Navigation', 'Avenue'));
	}
	
	// Register theme options panel admin menu
	public function admin_menu()
	{
		$object = add_object_page('Theme Options', $this->theme_name, 'manage_options', 'pyre_framework', array($this, 'options_panel'), get_bloginfo('template_directory') . '/framework/views/theme_options/images/themeoptions-icon.png');
		
		add_action('admin_print_styles-'.$object, array($this, 'admin_scripts'));
	}
	
	public function admin_scripts()
	{
		wp_enqueue_style($this->theme_name, get_bloginfo('template_url').'/framework/views/theme_options/style.css', '', '1');
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('ajaxupload', get_bloginfo('template_url').'/framework/views/theme_options/js/ajaxupload.js');
		wp_enqueue_script('color-picker', get_bloginfo('template_url').'/framework/views/theme_options/js/colorpicker.js');
	}
	
	// Callback function to support options panel call
	public function options_panel()
	{
		$options = new PyreThemeFrameworkOptions;
	}
	
	public function upload()
	{
		$clickedID = $_POST['data'];
		$filename = $_FILES[$clickedID];
       	$filename['name'] = preg_replace('/[^a-zA-Z0-9._\-]/', '', $filename['name']); 
		
		$override['test_form'] = false;
		$override['action'] = 'wp_handle_upload';    
		$uploaded_file = wp_handle_upload($filename,$override);
		
		$upload_tracking[] = $clickedID;
		update_option($clickedID, $uploaded_file['url']);
		
		if(!empty($uploaded_file['error'])) {
			echo 'Upload Error: ' . $uploaded_file['error'];
		}	
		else {
			echo $uploaded_file['url'];
		}
		
		die();
	}
	
	public function save_fields()
	{
		unset($_POST['action']);
		
		foreach($_POST as $key => $value) {
			update_option($key, stripslashes($value));
		}
		
		die();
	}
	
	public function reset_fields()
	{
		update_option('pyre_logo', '');
		update_option('pyre_favicon', '');
		update_option('pyre_header_banner', '');
		update_option('pyre_feedburner', '');
		update_option('pyre_analytics', '');
		update_option('pyre_twitter_id', '');
		update_option('pyre_facebook_id', '');
		update_option('pyre_featured_tags', '');
		update_option('pyre_posts_featured', 'On');
		update_option('pyre_author', 'On');
		update_option('pyre_tags', 'On');
		update_option('pyre_categories', 'On');
		update_option('pyre_related', 'On');
		update_option('pyre_twitter', 'On');
		update_option('pyre_facebook', 'On');
		update_option('pyre_digg', 'Off');
		update_option('pyre_stumbleupon', 'Off');
		update_option('pyre_reddit', 'Off');
		update_option('pyre_tumblr', 'Off');
		update_option('pyre_email', 'Off');
		update_option('pyre_skins', 'light_red');
		update_option('pyre_bg_color', 'F6F6F6');
		update_option('pyre_pattern', 'pattern6');
		update_option('pyre_link_color', 'd00000');
		
		update_option('pyre_slider_effect', 'random');
		update_option('pyre_slider_speed', '3000');
		
		update_option('pyre_posts_navigation', 'Off');
		
		update_option('pyre_footer_left', 'Copyright &copy; 2011 - Avenue. All rights reserved.');
		update_option('pyre_footer_right', '<a href="http://wordpress.org">Powered by WordPress</a>');
		
		update_option('pyre_homepage_style', 'magazine');
		
		update_option('pyre_featured_slider', 'On');
		
		die();
	}
	
	public function contact_form()
	{
		$headers = 'From: ' . $_POST['pyre_name'] . ' <' . $_POST['pyre_email'] . '>' . "\r\n";
		wp_mail(get_option('admin_email'), 'Email From '. $_POST['pyre_name'], $_POST['pyre_message'], $headers);
		
		die();
	}
	
}

/**
 * Include additional classes
 */

// Theme options page class
include_once('theme_options.php');

// Metaboxes
include_once('metaboxes.php');

// Shortcodes
include_once('shortcodes.php');

// Include widgets
include_once('widgets/widgets.php');

$pyre = new PyreThemeFramework('Avenue Theme');