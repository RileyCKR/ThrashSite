<?php
add_action('show_user_profile', 'wpsplash_extraProfileFields');
add_action('edit_user_profile', 'wpsplash_extraProfileFields');
add_action('personal_options_update', 'wpsplash_saveExtraProfileFields');
add_action('edit_user_profile_update', 'wpsplash_saveExtraProfileFields');

function wpsplash_saveExtraProfileFields($userID) {

	if (!current_user_can('edit_user', $userID)) {
		return false;
	}

	update_usermeta($userID, 'twitter', $_POST['twitter']);
	update_usermeta($userID, 'facebook', $_POST['facebook']);
	update_usermeta($userID, 'linkedin', $_POST['linkedin']);
	update_usermeta($userID, 'digg', $_POST['digg']);
	update_usermeta($userID, 'flickr', $_POST['flickr']);
}

function wpsplash_extraProfileFields($user)
{
?>
	<h3>Social Information</h3>

	<table class='form-table'>
		<tr>
			<th><label for='twitter'>Twitter</label></th>
			<td>
				<input type='text' name='twitter' id='twitter' value='<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'>Please enter your Twitter username. http://www.twitter.com/<strong>username</strong></span>
			</td>
		</tr>
		<tr>
			<th><label for='facebook'>Facebook</label></th>
			<td>
				<input type='text' name='facebook' id='facebook' value='<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>' class='regular-text' />
				<br />
				<span class='description'>Please enter your Facebook username/alias. http://www.facebook.com/<strong>username</strong></span>
			</td>
		</tr>
	</table>
<?php } ?>