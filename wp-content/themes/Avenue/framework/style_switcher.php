<style type='text/css'>
#style-switcher {
	position: fixed; top: 35px; right: 0;
	width: 156px;
}

#style-switcher-container {
	float: right;
	
	background: #ffffff;
	width: 126px;
	border: 1px solid #c1c1c1; border-right: 0;
	
	-webkit-border-top-left-radius: 8px;
	-webkit-border-bottom-left-radius: 8px;
	-moz-border-radius-topleft: 8px;
	-moz-border-radius-bottomleft: 8px;
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;

	text-align: center;
}

#style-switcher .hide_switcher {
}

#style-switcher .show_switcher {
	display: none;
}

#style-switcher .hide_switcher img, #style-switcher .show_switcher img { border: 0; float: right; margin: 0; margin-top: 20px; }

#style-switcher-container > div {
	padding-bottom: 15px;
}

#style-switcher h3.first-child {
	-webkit-border-top-left-radius: 8px;
	-moz-border-radius-topleft: 8px;
	border-top-left-radius: 8px;

	border-top: 0;
}

#style-switcher h3 {
	background: url('<?php bloginfo('template_directory'); ?>/framework/views/style_switcher/header_bg.png') repeat-x top left;
	height: 30px;
	line-height: 35px;
	
	font-size: 19px;
	color: #797979;
	text-align: left;
	text-indent: 10px;
	
	border: 1px solid #dedede;
	border-left: 0; border-right: 0;
	margin-bottom: 10px;
}

/* Color Picker */

.colorpicker {
	width: 356px;
	height: 176px;
	overflow: hidden;
	position: absolute;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_background.png);
	font-family: Arial, Helvetica, sans-serif;
	display: none;
	z-index: 10;
}
.colorpicker_color {
	width: 150px;
	height: 150px;
	left: 14px;
	top: 13px;
	position: absolute;
	background: #f00;
	overflow: hidden;
	cursor: crosshair;
}
.colorpicker_color div {
	position: absolute;
	top: 0;
	left: 0;
	width: 150px;
	height: 150px;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_overlay.png);
}
.colorpicker_color div div {
	position: absolute;
	top: 0;
	left: 0;
	width: 11px;
	height: 11px;
	overflow: hidden;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_select.gif);
	margin: -5px 0 0 -5px;
}
.colorpicker_hue {
	position: absolute;
	top: 13px;
	left: 171px;
	width: 35px;
	height: 150px;
	cursor: n-resize;
}
.colorpicker_hue div {
	position: absolute;
	width: 35px;
	height: 9px;
	overflow: hidden;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_indic.gif) left top;
	margin: -4px 0 0 0;
	left: 0px;
}
.colorpicker_new_color {
	position: absolute;
	width: 60px;
	height: 30px;
	left: 213px;
	top: 13px;
	background: #f00;
}
.colorpicker_current_color {
	position: absolute;
	width: 60px;
	height: 30px;
	left: 283px;
	top: 13px;
	background: #f00;
}
.colorpicker input {
	background-color: transparent;
	border: 1px solid transparent;
	position: absolute;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
	color: #898989;
	top: 4px;
	right: 11px;
	text-align: right;
	margin: 0;
	padding: 0;
	height: 12px;
}
.colorpicker_hex {
	position: absolute;
	width: 72px;
	height: 22px;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_hex.png) top;
	left: 212px;
	top: 142px;
}
.colorpicker_hex input {
	right: 6px;
}
.colorpicker_field {
	height: 22px;
	width: 62px;
	background-position: top;
	position: absolute;
}
.colorpicker_field span {
	position: absolute;
	width: 12px;
	height: 22px;
	overflow: hidden;
	top: 0;
	right: 0;
	cursor: n-resize;
}
.colorpicker_rgb_r {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_rgb_r.png);
	top: 52px;
	left: 212px;
}
.colorpicker_rgb_g {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_rgb_g.png);
	top: 82px;
	left: 212px;
}
.colorpicker_rgb_b {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_rgb_b.png);
	top: 112px;
	left: 212px;
}
.colorpicker_hsb_h {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_hsb_h.png);
	top: 52px;
	left: 282px;
}
.colorpicker_hsb_s {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_hsb_s.png);
	top: 82px;
	left: 282px;
}
.colorpicker_hsb_b {
	background-image: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_hsb_b.png);
	top: 112px;
	left: 282px;
}
.colorpicker_submit {
	position: absolute;
	width: 22px;
	height: 22px;
	background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/colorpicker_submit.png) top;
	left: 322px;
	top: 142px;
	overflow: hidden;
}
.colorpicker_focus {
	background-position: center;
}
.colorpicker_hex.colorpicker_focus {
	background-position: bottom;
}
.colorpicker_submit.colorpicker_focus {
	background-position: bottom;
}
.colorpicker_slider {
	background-position: bottom;
}

.colorSelector {
    position: relative;
    width: 27px;
    height: 27px;
    background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/select.png);
    float:left;
}
.colorSelector div {
    position: absolute;
    top: 4px;
    left: 3px;
    width: 21px;
    height: 19px;
    background: url(<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/colorpicker/select.png) center;
}

#style-switcher input[type=text] {
	background: url('<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/input_bg.png') repeat-x top left;
	color: #828282;
	font-size: 12px;
	border: 1px solid #d0d0d0;
	width: 60%;
	padding: 5px;
}

#style-switcher .colorpicker_wrapper .input { position: relative; }
#style-switcher .colorpicker_wrapper .input input { padding-top: 10px; padding-bottom: 10px; }
#style-switcher .colorSelector { position: absolute; top: 6px; right: 25px; }

#style-switcher img { width: 20px; height: 20px; border: 1px solid #dcdcdc; margin: 2px; }
#style-switcher .selected img { border: 1px solid #333; }
</style>

<script type='text/javascript'>
jQuery(document).ready(function($) {
	<?php include 'views/theme_options/js/colorpicker.js'; ?>

	jQuery('#custom_bg .colorSelector').ColorPicker({
		color: '#F6F6F6',
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#custom_bg .colorSelector div').css('backgroundColor', '#' + hex);
			jQuery('#custom_bg input').val(hex);
			
			jQuery('body').css('background-color', '#' + hex);
		}
	});

	jQuery('#custom_arrow .colorSelector').ColorPicker({
		color: '#F6F6F6',
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#custom_arrow .colorSelector div').css('backgroundColor', '#' + hex);
			jQuery('#custom_arrow input').val(hex);
			
			jQuery('.arrows, .block-arrows, .block-arrows a, .meta-arrow, .tweets a, .textwidget a').css('color', '#' + hex);
		}
	});
	
	jQuery('#predefined-skins a').click(function(e) {
		e.preventDefault();
		
		var skin = $(this).attr('href');
		var color = $(this).data('color');
		var pattern = $(this).data('pattern');
		var link = $(this).data('link');
		
		jQuery(this).parent().find('a').removeClass('selected');
		jQuery(this).addClass('selected');
		
		jQuery('#custom_bg input').val(color);
		jQuery('#custom_bg .colorSelector div').css('background-color', '#' + color);
		jQuery('#custom_bg .colorSelector').ColorPickerSetColor(color);
		
		jQuery('#patterns a').removeClass('selected');
		jQuery('#patterns a[rel="' + pattern + '"]').addClass('selected');
		
		jQuery('#custom_arrow input').val(link);
		jQuery('#custom_arrow .colorSelector div').css('background-color', '#' + link);
		jQuery('#custom_arrow .colorSelector').ColorPickerSetColor(link);
		
		jQuery('body').css('background-color', '#' + color);
		jQuery('body').css('background-image', 'url(<?php bloginfo('template_url'); ?>/images/patterns/' + pattern + '.png)');
		jQuery('.arrows, .block-arrows, .block-arrows a, .meta-arrow, .tweets a, .textwidget a').css('color', '#' + link);
		
		jQuery('#logo img').attr('src', '<?php bloginfo('template_url'); ?>/css/skins/images/' + skin + '_logo.png');
	});
	
	jQuery('#patterns a').click(function(e) {
		e.preventDefault();
		
		var pattern = $(this).attr('rel')
		
		jQuery(this).parent().find('a').removeClass('selected');
		jQuery(this).addClass('selected');
		
		jQuery('body').css('background-image', 'url(<?php bloginfo('template_url'); ?>/images/patterns/' + pattern + '.png)');
	});
	
	jQuery('#style-switcher .hide_switcher').click(function(e) {
		e.preventDefault();
		
		jQuery('#style-switcher-container').hide();
		
		jQuery(this).hide();
		jQuery('#style-switcher .show_switcher').show();
	});
	
	jQuery('#style-switcher .show_switcher').click(function(e) {
		e.preventDefault();
		
		jQuery('#style-switcher-container').show();
		
		jQuery(this).hide();
		jQuery('#style-switcher .hide_switcher').show();
	});
});
</script>
<div id='style-switcher'>
	<div id='style-switcher-container'>
		<div id='predefined-skins'>
			<h3 class='first-child'>Predefined Skins</h3>
			
			<a href='blue' data-color='222222' data-pattern='pattern1' data-link='167ece'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_blue.png' alt='' />
			</a>
			<a href='brown' data-color='222222' data-pattern='pattern1' data-link='966d54'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_brown.png' alt='' />
			</a>
			<a href='green' data-color='222222' data-pattern='pattern1' data-link='4fad16'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_green.png' alt='' />
			</a>
			<a href='purple' data-color='222222' data-pattern='pattern1' data-link='bf16d8'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_purple.png' alt='' />
			</a>
			<a href='red' data-color='222222' data-pattern='pattern1' data-link='d00000'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_red.png' alt='' />
			</a>
			<a href='teal' data-color='222222' data-pattern='pattern1' data-link='4f8f8b'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/dark_teal.png' alt='' />
			</a>
			<a href='blue' data-color='F6F6F6' data-pattern='pattern6' data-link='167ece'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_blue.png' alt='' />
			</a>
			<a href='brown' data-color='F6F6F6' data-pattern='pattern6' data-link='966d54'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_brown.png' alt='' />
			</a>
			<a href='green' data-color='F6F6F6' data-pattern='pattern6' data-link='4fad16'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_green.png' alt='' />
			</a>
			<a href='purple' data-color='F6F6F6' data-pattern='pattern6' data-link='bf16d8'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_purple.png' alt='' />
			</a>
			<a href='red' data-color='F6F6F6' data-pattern='pattern6' data-link='d00000' class='selected'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_red.png' alt='' />
			</a>
			<a href='teal' data-color='F6F6F6' data-pattern='pattern6' data-link='4f8f8b'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/predefined_thumbs/light_teal.png' alt='' />
			</a>
		</div>
		<div id='custom_bg' class='colorpicker_wrapper'>
			<h3>BG Color</h3>
			
			<div class='input'>
				<input type='text' value='F6F6F6' name='custom_bg' id='custom_bg' />
				<div class="colorSelector"><div style='background-color: #F6F6F6;'></div></div>
			</div>
		</div>
		<div id='patterns'>
			<h3>Patterns</h3>
			
			<a href='#' rel='pattern1'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern1.png' alt='' />
			</a>
			<a href='#' rel='pattern2'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern2.png' alt='' />
			</a>
			<a href='#' rel='pattern3'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern3.png' alt='' />
			</a>
			<a href='#' rel='pattern4'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern4.png' alt='' />
			</a>
			<a href='#' rel='pattern5'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern5.png' alt='' />
			</a>
			<a href='#' rel='pattern6' class='selected'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern6.png' alt='' />
			</a>
			<a href='#' rel='pattern7'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern7.png' alt='' />
			</a>
			<a href='#' rel='pattern8'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern8.png' alt='' />
			</a>
			<a href='#' rel='pattern9'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern9.png' alt='' />
			</a>
			<a href='#' rel='pattern10'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern10.png' alt='' />
			</a>
			<a href='#' rel='pattern11'>
				<img src='<?php bloginfo('template_directory'); ?>/framework/views/theme_options/images/pattern-thumbs/pattern11.png' alt='' />
			</a>
		</div>
		<div id='custom_arrow' class='colorpicker_wrapper'>
			<h3>Arrow Color</h3>
			
			<div class='input'>
				<input type='text' value='d00000' name='custom_arrow' id='custom_arrow' />
				<div class="colorSelector"><div style='background-color: #d00000;'></div></div>
			</div>
		</div>
	</div>
	
	<a href='#' class='hide_switcher'><img src='<?php bloginfo('template_directory'); ?>/framework/views/style_switcher/hide_switcher.png' alt='Hide'></a>
	<a href='#' class='show_switcher'><img src='<?php bloginfo('template_directory'); ?>/framework/views/style_switcher/show_switcher.png' alt='Show'></a>
	
	<div class='clear'></div>
</div>