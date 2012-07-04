<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/colorbox/colorbox.css" type="text/css" />

<?php if(get_option('pyre_feedburner')): ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo get_option('pyre_feedburner'); ?>" /> 
<?php endif; ?>

<?php if(get_option('pyre_favicon')): ?>
<link rel="shortcut icon" href="<?php echo get_option('pyre_favicon'); ?>" />
<?php endif; ?>

<?php wp_enqueue_script('jquery'); ?>
<?php wp_enqueue_script('jCarouselLite', get_bloginfo('template_directory'). '/js/jcarousellite_1.0.1.pack.js'); ?>
<?php wp_enqueue_script('nivo', get_bloginfo('template_directory'). '/js/jquery.nivo.slider.pack.js'); ?>
<?php wp_enqueue_script('jquery.colorbox', get_bloginfo('template_directory'). '/js/colorbox/jquery.colorbox-min.js'); ?>
<?php wp_enqueue_script('AvenueTheme', get_bloginfo('template_directory'). '/js/scripts.js'); ?>
<?php
wp_localize_script('AvenueTheme', 'AvenueVars', array(
	'ajaxUrl' => admin_url('admin-ajax.php'),
));
?>
<?php if(is_singular()) { wp_enqueue_script('comment-reply'); } ?>
<?php wp_head(); ?>

<script type='text/javascript'>
jQuery(window).load(function() {
	// Implementation of Nivo Slider
    jQuery('#slider').nivoSlider({
		effect: '<?php echo get_option('pyre_slider_effect'); ?>',
		pauseTime: '<?php echo get_option('pyre_slider_speed'); ?>',
        controlNavThumbs: true,
        controlNavThumbsFromRel: true,
        directionNav: false,
        directionNavHide: false,
        captionOpacity: false
	});

	jQuery('.nivo-control').each(function() {
		jQuery('<div class="overlay">').appendTo(this);
	});
});
</script>

<style type='text/css'>
body { background:#<?php echo get_option('pyre_bg_color'); ?> url('<?php bloginfo('template_url'); ?>/images/patterns/<?php echo get_option('pyre_pattern'); ?>.png') repeat; }
.arrows { color:#<?php echo get_option('pyre_link_color'); ?>; }
.block-arrows, .block-arrows a { color:#<?php echo get_option('pyre_link_color'); ?>; }
.meta-arrow { font-size:16px; color:#<?php echo get_option('pyre_link_color'); ?>; }
.tweets a, .textwidget a { color:#<?php echo get_option('pyre_link_color'); ?>; }
</style>

</head>

<body <?php body_class($class); ?>>
	<a name='top'></a>
	
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
		
		<!-- BEGIN HEADER-TOP -->
		<?php wp_nav_menu(array('theme_location' => 'topNav', 'depth' => 3, 'fallback_cb' => false, 'menu_class' => 'topNav')); ?>
		<!-- END HEADER-TOP -->
	
		<!-- BEGIN WRAPPER-CONTENT -->
		<div id="wrapper-content">
		
			<!-- BEGIN HEADER -->
			<div id="header">
				
				<!-- BEGIN HEADER-MIDDLE -->
				<div id="header-middle">
					
					<div id="logo">
						<?php
						if(get_option('pyre_logo')) {
							$logo = get_option('pyre_logo');
						} else {
							if(get_option('pyre_skins')) {
								$color = explode('_', get_option('pyre_skins'));
								$logo = get_bloginfo('template_directory') . '/css/skins/images/' . $color[1] . '_logo.png';
							} else {
								$logo = get_bloginfo('template_directory') . '/images/logo4.png';
							}
						}
						?>
						<a href='<?php bloginfo('wpurl'); ?>'><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
					</div>
					
					<?php if(get_option('pyre_header_banner')): ?>
					<div id="header-banner">
						<?php echo get_option('pyre_header_banner'); ?>
					</div>
					<?php endif; ?>
					
				</div>
				<!-- END HEADER-MIDDLE -->
				
				<!-- BEGIN WRAPPER-NAVIGATION -->
				<div id="wrapper-navigation">
				
					<div id="navigation">
						<?php wp_nav_menu(array('theme_location' => 'mainNav', 'depth' => 3)); ?>
					</div>
				
				</div>
				<!-- END WRAPPER-NAVIGATION -->
			
			</div>
			<!-- END HEADER -->
			