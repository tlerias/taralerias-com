<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Trivial Pursuit</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id = "content">
<p><img src = 'images/title.png' alt = 'title' /></p>

<?php

$answer = $_POST['answers'];
$realanswer = $_POST['trueanswer'];
$choice = $_POST['choice'];
$nname = $_POST['nname']; 
$winner = 'win.php';



$dbc = @mysqli_connect ("sql5c40b.carrierzone.com", "taralerias629126", "908tBuffs" , "phpmy1_taralerias_com") OR die (' Connection to MySQL failed: ' . mysqli_connect_error() );


if ($choice == 'blue'){
	if ($answer == $realanswer)
	{
		echo "Correct! Nice Work. <br/>";
			$usernameupdate = "UPDATE users SET blue = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
							
				$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
							
							else{
								echo "ERROR";
								
							}
						
	
	}
	else {
		echo "Incorrect.";
		echo "The answer is " . $realanswer;
	}
}
elseif ($choice == 'green'){			
			if ($answer == $realanswer)
			{
				echo "Correct!! Woo hoo! <br/>";
					$usernameupdate = "UPDATE users SET green = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
							
							$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
			
			}
			else {
				echo "Incorrect. <br />";
				echo "The answer is " . $realanswer;
			}
}

elseif ($choice == 'pink'){			
			if ($answer == $realanswer)
			{
				echo "Correct, you're doing great! <br/>";
					$usernameupdate = "UPDATE users SET pink = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
							
					$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
			
			}
			else {
				echo "Incorrect. <br />";
				echo "The answer is " . $realanswer;
			}
}

elseif ($choice == 'yellow'){			
			if ($answer == $realanswer)
			{
				echo "Correct! Awesome! <br/>";
				$usernameupdate = "UPDATE users SET yellow = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
							
							$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
			}
			else {
				echo "Incorrect. <br />";
				echo "The answer is " . $realanswer;
			}
}

elseif ($choice == 'purple'){			
			if ($answer == $realanswer)
			{
				echo "Correct, you're smart! <br/>";
			$usernameupdate = "UPDATE users SET purple = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
							
						$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
			
			}
			else {
				echo "Incorrect. <br />";
				echo "The answer is " . $realanswer;
			}
}

else{			
			if ($answer == $realanswer)
			{
				echo "Correct! Good Job! <br/>";
					$usernameupdate = "UPDATE users SET orange = '1' WHERE nname = '$nname'"; 
				
				
						$updateresult = mysqli_query($dbc, $usernameupdate);
							if ($updateresult){
							}
							
					$counter = "UPDATE users SET counter = counter + 1 WHERE nname = '$nname'"; 
				
				
						$counterresult = mysqli_query($dbc, $counter);
							if ($counterresult){
							}
			
			}
			else {
				echo "Incorrect. <br />";
				echo "The answer is " . $realanswer . "<br />";

			}
			
			
}


$wincheck = "SELECT green, blue, pink, purple, yellow, orange FROM users WHERE nname = '$nname'";
	
		$winresult = mysqli_query($dbc, $wincheck);
		if ($winresult){
					while ($win = mysqli_fetch_array($winresult))
			{

	
				$green = $win['green'];
				$blue = $win['blue'];
				$pink = $win['pink'];
				$yellow = $win['yellow'];
				$purple = $win['purple'];
				$orange = $win['orange'];
				
				echo '<p>You have these pieces:</p> ';
				if ($green == '1'){
					echo "&nbsp; <img src ='images/green.jpg'>&nbsp";
					
				}
				if ($blue == '1'){
					echo "&nbsp<img src ='images/blue.jpg'>&nbsp";
					
				}
				if ($yellow == '1'){
					echo "&nbsp<img src ='images/yellow.jpg'>&nbsp";
					
				}
				if ($pink == '1'){
					echo "&nbsp<img src ='images/pink.jpg'>&nbsp";
					
				}
				if ($orange == '1'){
					echo "&nbsp<img src ='images/orange.jpg'>&nbsp";
					
				}
				if ($purple == '1'){
					echo "&nbsp<img src ='images/purple.jpg'>&nbsp";
					
				}
				
				
				
				
				

			if ($green == '1' && $blue == '1' && $pink == '1' && $yellow == '1' && $purple == '1' && $orange == '1')
			{			
			$finish = "UPDATE users SET finish = '1' WHERE nname = '$nname'"; 
		$winfinish = mysqli_query($dbc, $finish);


				header('Location:' . $winner);
				//source: http://www.webmasterworld.com/forum88/2322.htm
				
			}
			
				
							}
							
		}
							else{
								echo "not working";
							}

 mysqli_close($dbc);
 
echo "<p>
<form name = 'answerform' method = 'POST' action = 'question1.php'>


	    <input type = 'submit' value = 'Spin Again' />   
        
         <input type = 'hidden' name = 'choice' size = '50' value = '$choice'>
         <input type = 'hidden' name = 'nname' size = '50' value = '$nname'>

        </td>
        </tr>
   </table>
   </form>
   </p>";

?>
</div>
</body>
</html>