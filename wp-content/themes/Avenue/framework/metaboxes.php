<?php

class PyreThemeFrameworkMetaboxes {
	
	public function __construct()
	{
		add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
		add_action('save_post', array($this, 'save_meta_boxes'));
	}
	
	public function add_meta_boxes()
	{
		$this->add_meta_box('post_options', 'Post Options', 'post');
		$this->add_meta_box('review_info', 'Review Info', 'post');
	}
	
	public function add_meta_box($id, $label, $post_type)
	{
	    add_meta_box( 
	        'pyre_' . $id,
	        __($label, 'Avenue'),
	        array($this, $id),
	        $post_type
	    );
	}
	
	public function save_meta_boxes($post_id)
	{
		if(defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}
		
		foreach($_POST as $key => $value) {
			if(strstr($key, 'pyre_')) {
				update_post_meta($post_id, $key, $value);
			}
		}
	}
	
	public function review_info()
	{	
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/review_info.php';
	}
	
	public function post_options()
	{	
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/post_options.php';
	}
	
	public function text($id, $label, $desc = '')
	{
		global $post;
		
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<input type="text" id="pyre_' . $id . '" name="pyre_' . $id . '" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" />';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
	public function select($id, $label, $options, $desc = '')
	{
		global $post;
		
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<select id="pyre_' . $id . '" name="pyre_' . $id . '">';
				foreach($options as $key => $option) {
					if(get_post_meta($post->ID, 'pyre_' . $id, true) == $key) {
						$selected = 'selected="selected"';
					} else {
						$selected = '';
					}
					
					$html .= '<option ' . $selected . 'value="' . $key . '">' . $option . '</option>';
				}
				$html .= '</select>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
}

$metaboxes = new PyreThemeFrameworkMetaboxes;