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
    
    wp_mail( $email, 'Album Download Notification', $message );

    // Check success
    $error_msg = '';
    global $phpmailer;
    if ( $phpmailer->ErrorInfo != "" ) {
        $error_msg  = '<div class="error" style="color:red;"><p>An error was encountered while trying to send the e-mail.</p>';
        $error_msg .= '<blockquote style="font-weight:bold;">';
        $error_msg .= '<p>' . $phpmailer->ErrorInfo . '</p>';
        $error_msg .= '</p></blockquote>';
        $error_msg .= '</div>';
    } else {
        header("location: " . $album);
    }
}

?>
<html>
<head>
    <title>Thrash Magazine Download Center</title>
    <script type="text/javascript" src="/wp-includes/js/jquery/jquery.js?ver=1.7.1"></script>
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
                    $prettyFile = str_replace("./", "", $thisFile );
                    $prettyBytes = '';
                    $bytes = filesize($thisFile);
                    if ($bytes >= 1048576){
                        $prettyBytes = number_format($bytes / 1048576, 2) . ' MB';
                    }
                    elseif ($bytes >= 1024){
                        $prettyBytes = number_format($bytes / 1024, 2) . ' KB';
                    }
                    else {
                        $prettyBytes = $bytes . ' bytes';
                    }

                    
                    $tableRow = "<tr>";
                    $tableRow .= sprintf("<td>%s</td>", $prettyFile);
                    $tableRow .= sprintf("<td style=\"text-align:right;\">%s</td>", $prettyBytes);
                    $tableRow .= sprintf("<td>%s</td>", date('m-d-Y', filemtime( $thisFile )));
                    $tableRow .= "<td><input type=\"button\" value=\"Download\" ";
                    $tableRow .= sprintf('onclick="jQuery(\'#album\').val(\'%s\'); this.form.submit();"></td>', $prettyFile);
                    $tableRow .= "</tr>";
                    
                    echo $tableRow;
		}

		?>
	</tbody>
	</table>
        <input type="hidden" id="album" name="album" />
    </form>
</body>
</html>