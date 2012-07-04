<html>
<head>
    <title>Thrash Magazine Download Center</title>
</head>
<body>
    <h1>Thrash Download Center</h1>
	<p>Click download to begin downloading an album to review. The download may take several seconds to start, do not press the button multiple times.
    Staff will be automatically notified of your download so we can cycle new albums into the list.</p>

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
			echo "<td><input type=\"submit\" value=\"Download\"></td>";
			echo "</tr>";
		}

		?>
	</tbody>
	</table>

</body>
</html>