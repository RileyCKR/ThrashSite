<?php
// Adds RSS feeds link
if(!get_option('pyre_feedburner')) {
	add_theme_support('automatic-feed-links');
}

// Register Widgetized Areas
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Homepage',
		'before_widget' => '<div class="homepage-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Homepage (Blog Style)',
		'before_widget' => '<div class="homepage-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widget 1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widget 2',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widget 3',
		'before_widget' => '<div class="widget last">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

// Add post thumbnail functionality
add_theme_support('post-thumbnails', array('post'));

add_image_size('post-image', 610, 250, true);
add_image_size('featured-image', 516, 340, true);
add_image_size('featured-image-thumb', 70, 60, true);
add_image_size('widget-image', 290, 160, true);
add_image_size('widget-image-thumb', 50, 50, true);
add_image_size('media-thumb', 140, 90, true);
add_image_size('related-thumb', 134, 90, true);

// Include boostrap file for the pyre theme framework
include_once('framework/bootstrap.php');

// Custom Functions
include_once('framework/functions.php');

// Shortcodes
include_once('shortcodes.php');

// Updates Notifier
include_once('update-notifier.php');

// Profile Metaboxes
include_once('framework/profile.php');

// Translation
load_theme_textdomain('Avenue', get_template_directory() . '/languages');
$locale = get_locale();
$locale_file = TEMPLATEPATH . '/languages/' . $locale . '.php';
if(is_readable($locale_file)) {
	require_once($locale_file);
}

// How comments are displayed
function avenue_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	
		<div class="the-comment">
		
			<?php echo get_avatar($comment,$size='60'); ?>
			
			<div class="comment-arrow"></div>
			
			<div class="comment-box">
			
				<div class="comment-author">
					<strong><?php echo get_comment_author_link() ?></strong>
					<small><?php printf(__('%1$s at %2$s', 'Avenue'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('Edit'),'  ','') ?> - <?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></small>
				</div>
			
				<div class="comment-text">
					<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.', 'Avenue') ?></em>
					<br />
					<?php endif; ?>
					<?php comment_text() ?>
				</div>
			
			</div>
			
		</div>

<?php }
// Trim end of excerpt
function pyre_trim_excerpt($text) {
	return rtrim($text, '[...]');
}
add_filter('get_the_excerpt', 'pyre_trim_excerpt');