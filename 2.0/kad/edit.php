<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Update and Edit Material</title>
</head>

<body>
<?php
if (isset($_REQUEST['selection'])) {

	$selection = $_REQUEST['selection'];
	
	if ($selection == 'strategy') {
		$table = 'strategy';
											$dbc = @mysqli_connect ("sql5c40b.carrierzone.com", "qxx4l79omy859598", "Brownie890" , "main_qxx4l79o_myutilitydomain_com") OR die (' Connection to MySQL failed: ' . mysqli_connect_error() );
													$sql = "SELECT id, name, path FROM strategy";
							$result = mysqli_query($dbc,$sql);
								$num = mysqli_num_rows($result);
		
		if ($num > 0)
		{
			
			echo "<p>There are currently $num entries.</p>\n";
			echo '<form name = "update" method = "POST" action = "submit.php">';

			
			echo '<table align="center" "cellspacing="3" cellpadding="3" width="40%">
			<tr><td align="left"><b>File Name</b></td><td align="left"><b>Path</b></td></tr>';
		
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			echo '<tr><td align="left"><input type = "text" value ="' . $row['id'] . '" readonly/></td><td align="left"><input type = "text" value ="' . $row['name'] . '" /></td><td align="left"><input type = "text" value ="' . $row['path'] .  '" /></td><td align="left"><input name="$row["id"] type="checkbox" value="delete"> delete </td></tr><tr><td colspan = "4" align = "center"><input type="submit" value="Submit"><input type = "hidden" value = "strategy"> </td></tr>';
		echo '</table>'; 
		}
		else echo "There are currently no entries";

								
							mysqli_free_result($result);	
							
							 mysqli_close($dbc);
												             
		
			
	} elseif ($selection == 'brandaudit') {
		 header('Location: editbrandaudit.php');
		 
		 
	} elseif ($selection == 'blog') {
		 header('Location: editblog.php');
	} elseif ($selection == 'me') {
		 header('Location: editme.php');
	} elseif ($selection == 'print') {
		 header('Location: editprint.php');
	} elseif ($selection == 'web') {
		 header('Location: editweb.php');
	} elseif ($selection == 'leadership') {
		 header('Location: editleadership.php');
	} elseif ($selection == 'misc') {
		 header('Location: editmisc.php');
	} else { // Unacceptable value.
		$selection = NULL;
		 '<p class="error">You forgot to choose a Section!</p>';
	}
	
} else {
	$selection = NULL;
	echo '<p class="error">You forgot to choose a Section!</p>';
}

?>
</body>
</html>