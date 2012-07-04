<?php include_once('header.php'); ?>

<form action='' enctype='multipart/form-data'>
	<div class='top_button'>
		<img class='save_tip' style='display: none;' src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/save_tip.png' alt='' />
		<input type='submit' name='save_changes' value='' class='save_changes' />
	</div>
	<div style='clear: both;'></div>
	<div id='general_settings' class='mainTab'>
		<div id='general'>
			<?php $this->upload('logo', 'Logo', 'Upload your logo'); ?>
			<?php $this->upload('favicon', 'Favicon', 'Upload your Favicon'); ?>
			<?php $this->textarea('header_banner', 'Header Banner Code', ''); ?>
			<?php $this->text('feedburner', 'Feedburner URL', ''); ?>
		</div>
		<div id='analytics' style='display: none;'>
			<?php $this->textarea('analytics', 'Analaytics Code', ''); ?>
		</div>
		<div id='social_media' style='display: none;'>
			<?php $this->text('twitter_id', 'Twitter ID', ''); ?>
			<?php $this->text('facebook_id', 'Facebook ID', 'If your facebook page URL is http://facebook.com/cocacola, your facebook id is "coacola". If your facebook page ID has numbers for e.g: http://facebook.com/cocacola/7846745634632 then your facebook ID is "7846745634632".'); ?>
		</div>
		<div id='theme_footer' style='display: none;'>
			<?php $this->textarea('footer_left', 'Footer Text Left', ''); ?>
			<?php $this->textarea('footer_right', 'Footer Text Right', ''); ?>
		</div>
	</div>
	<div id='homepage_settings' style='display: none;' class='mainTab'>
		<?php $this->checkbox('featured_slider', 'Show featured slider'); ?>
		<?php $this->select('homepage_style', array(
			'magazine' => 'Magazine',
			'blog' => 'Traditional Blog',
		),
		'Homepage Style'); ?>
		<?php $this->text('featured_tags', 'Featured Posts Slider Tags', 'Posts with tags in this field will show up on homepage featured posts slider. <strong>Separate tags by comma.</strong>'); ?>
		<?php $this->select('slider_effect', array(
			'random' => 'Random',
			'sliceDown' => 'Slice Down',
			'sliceDownLeft' => 'Slice Down Left',
			'sliceUp' => 'Slice Up',
			'sliceUpLeft' => 'Slice Up Left',
			'sliceUpDown' => 'Slice Up Down',
			'sliceUpDownLeft' => 'Slice Up Down Left',
			'fold' => 'Fold',
			'fade' => 'Fade',
			'slideInRight' => 'Slide In Right',
			'slideInLeft' => 'Slide In Left',
			'boxRandom' => 'Box Random',
			'boxRain' => 'Box Rain',
			'boxRainReverse' => 'Box Rain Reverse',
			'boxRainGrow' => 'Box Rain Grow',
			'boxRainGrowReverse' => 'Box Rain Grow Reverse',
		),
		'Slider Effect'); ?>
		<?php $this->text('slider_speed', 'Slider Speed', ''); ?>
	</div>
	<div id='posts_settings' style='display: none;' class='mainTab'>
		<?php $this->checkbox('posts_navigation', 'Show posts navigation'); ?>
		<?php $this->checkbox('posts_featured', 'Show featured image on posts'); ?>
		<?php $this->checkbox('author', 'Show author info box on posts'); ?>
		<?php $this->checkbox('tags', 'Show tags on posts'); ?>
		<?php $this->checkbox('categories', 'Show categories on posts'); ?>
		<?php $this->checkbox('related', 'Show related posts box on posts'); ?>
		<?php $this->checkboxes(array(
			'twitter' => 'Twitter',
			'facebook' => 'Facebook',
			'digg' => 'Digg',
			'stumbleupon' => 'StumbleUpon',
			'reddit' => 'Reddit',
			'tumblr' => 'Tumblr',
			'email' => 'Email',
			'google' => 'Google +1',
		),
		'Social Media Support'); ?>
	</div>
	<div id='appearence_settings' style='display: none;' class='mainTab'>
		<?php $this->skins('skins', array(
			'dark_blue' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => '167ece', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_blue.png'),
			'dark_brown' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => '966d54', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_brown.png'),
			'dark_green' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => '4fad16', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_green.png'),
			'dark_purple' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => 'bf16d8', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_purple.png'),
			'dark_red' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => 'd00000', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_red.png'),
			'dark_teal' => array('bg_color' => '222222', 'pattern' => 'pattern1', 'link_color' => '4f8f8b', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/dark_teal.png'),
			'light_blue' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => '167ece', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_blue.png'),
			'light_brown' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => '966d54', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_brown.png'),
			'light_green' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => '4fad16', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_green.png'),
			'light_purple' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => 'bf16d8', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_purple.png'),
			'light_red' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => 'd00000', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_red.png'),
			'light_teal' => array('bg_color' => 'F6F6F6', 'pattern' => 'pattern6', 'link_color' => '4f8f8b', 'thumb' => get_bloginfo('template_url') . '/framework/views/theme_options/images/predefined_thumbs/light_teal.png'),
		), 'Predefined Skins'); ?>
		<img style='margin-left: 18px; margin-top: 30px; margin-bottom: 20px;'src='<?php bloginfo('template_url'); ?>/framework/views/theme_options/images/create_skin.png' alt='Create your own skin' />
		
		<?php $this->colorpicker('bg_color', 'Bg Color'); ?>
		
		<?php $this->images('pattern', array(
			'pattern1' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern1.png',
			'pattern2' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern2.png',
			'pattern3' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern3.png',
			'pattern4' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern4.png',
			'pattern5' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern5.png',
			'pattern6' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern6.png',
			'pattern7' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern7.png',
			'pattern8' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern8.png',
			'pattern9' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern9.png',
			'pattern10' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern10.png',
			'pattern11' => get_bloginfo('template_url') . '/framework/views/theme_options/images/pattern-thumbs/pattern11.png',
		), 'Background Pattern'); ?>
		
		<?php $this->colorpicker('link_color', 'Arrow Color'); ?>
	</div>
	<div class='reset_save'>
		<div class='reset_button'>
			<input onclick='return confirm("Click OK to reset. Any settings will be lost!");' type='submit' name='reset' value='' class='reset_btn' />
			<img class='reset_tip' style='display: none;' src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/reset_tip.png' alt='' />
		</div>
		<div class='bottom_button'>
			<img class='save_tip' style='display: none;' src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/save_tip.png' alt='' />
			<input type='submit' name='save_changes' value='' class='save_changes' />
		</div>
		<div style='clear: both;'></div>
	</div>
	<div style='clear: both;'></div>
</form>

<?php include_once('footer.php'); ?>