<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Strategy - Kinsey Durham</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src='javascript.js'></script>




</head>

<body>
<div id = "logo">
	<a href = "index.html"><img src = "images/logo1.jpg" alt = "Kinsey Ann Logo" /></a>


	</div>

 <div id = "work1"> 
    <img src = "images/strategy1.jpg" alt = "Work" />
</div>
                     <div id="Contentmed">
                     
                     <?php
					 
					 
					 	$dbc = @mysqli_connect ("sql5c40b.carrierzone.com", "qxx4l79omy859598", "Brownie890" , "main_qxx4l79o_myutilitydomain_com") OR die (' Connection to MySQL failed: ' . mysqli_connect_error() );
						$sql = "SELECT name, path FROM strategy WHERE id = '1'";
$result = mysqli_query($dbc,$sql);
$num = mysqli_num_rows($result);

if ($num > 0)
{
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	$path = $row['path'];
	$name = $row['name'];
	echo '<a target = "_blank" href =' . $path . '>' . $name . '</a>';
		
	}
}
else {
	echo 'Sorry, there is nothing here yet!';
}
	
mysqli_free_result($result);	

 mysqli_close($dbc);
					?>	
                    
                     
                     
                     </div>
</body>
</html>
