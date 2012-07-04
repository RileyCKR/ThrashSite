<?php
/**
 * Code to load wordpress methods so we can use their authentication methods
 */
define('WP_USE_THEMES', true);

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( '../wp-load.php' );

}

/**
 * Show error message if the user doesn't have sufficient privelages
 */
if (! current_user_can('publish_posts')) {
	header ('Status: 403 Forbidden');
	exit;
}

/**
 * Send the email on postback, code copied from configure-smtp plugin
 */
$album = $_POST['album'];
if (isset ($album)){
    //echo "<h1>" . $album . "</h1>";
    //header('location: ' . $album);
    
    $user = wp_get_current_user();
    $username = $user->display_name;
    $email = 'chris.riley@thrashmag.com'; //Comma seperated list
    $timestamp = current_time( 'mysql' );
    $message = "New Album Downloaded For Review\n\n";
    $message .= sprintf("Date: %s\n", $timestamp);
    $message .= sprintf("User: %s\n", $username );
    $message .= sprintf("File: %s\n", $album );
    $message .= "\n\n";
    $message .= sprintf("Within a week '%s' will be removed from the online storage and more" . 
                "albums will be added. If you decide not to review this album, " .
                "please Reply-All so we know not to remove this album from the list.", $album);
    $message .= "\n\n";
    $message .= "Thanks,\n";
    $message .= "Don Alcombright\n\n";
//    "<p>New Album Downloaded For Review </p>" +
//            "<p><strong>Date: {0}<br />" +
//            "User: {1}<br />" +
//            "File: {2}</strong></p>" +
//            "<p>Within a week {2} will be removed from the online storage and more albums will be added. If you decide not to review this album, " +
//            "please Reply-All so we know not to remove this album from the list.</p>" +
//            "<p>You received this message because you write reviews for us.<br />" +
//            "The above message is for our tracking so we know which albums are still available to review and so we know who has what albums.</p>" +
//            "<p>Thanks,<br/>" +
//            "Don Alcombright</p>";
    wp_mail( $email, 'Album Download Notification', $message );

    // Check success
    
    $error_msg = '';
    global $phpmailer;
    if ( $phpmailer->ErrorInfo != "" ) {
        $error_msg  = '<div class="error"><p>An error was encountered while trying to send the test e-mail.</p>';
        $error_msg .= '<blockquote style="font-weight:bold;">';
        $error_msg .= '<p>' . $phpmailer->ErrorInfo . '</p>';
        $error_msg .= '</p></blockquote>';
        $error_msg .= '</div>';
    } else {
        $error_msg  = '<div class="updated"><p>Test e-mail sent.</p>';
        $error_msg .= '<p>' . sprintf('The body of the e-mail includes this time-stamp: %s.', $timestamp ) . '</p></div>';
    }
}

?>
<html>
<head>
    <title>Thrash Magazine Download Center</title>
</head>
<body>
    <form action="." method="post">
        <h1>Thrash Download Center</h1>
        <p>Click download to begin downloading an album to review. The download may take several seconds to start, do not press the button multiple times.
        Staff will be automatically notified of your download so we can cycle new albums into the list.</p>
        
        <?php
        
        if (isset ($error_msg))
        {
            echo $error_msg;
        }
        
        ?>
        
	<table cellspacing="0" cellpadding="4" border = "1" align="center" style="width:100%;border-collapse:collapse;" rules="all">
	<tbody>
		<tr>
			<th>Artist - Album</th>
			<th>Size</th>
			<th>Added</th>
			<th>Download</th>
		</tr>
			
		<?php 

		//path to directory to scan
		$directory = "./";
 
		$files = glob("" . $directory . "{*.zip,*.rar,*.7z}", GLOB_BRACE);
		foreach($files as $thisFile)
		{
			echo "<tr>";
			echo "<td>" . $thisFile . "</td>";
			echo "<td>" . filesize($thisFile) . "</td>";
			echo "<td>" . date('m-d-Y', filemtime( $thisFile ) ) . "</td>";
			echo '<td><input type="button" value="Download" onclick="this.form.submit()"></td>';
			echo "</tr>";
		}

		?>
	</tbody>
	</table>
        <input type="hidden" name="album" value="test" />
    </form>
</body>
</html>