<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Craps</title>
<link href="crapstyleDPL.css" rel="stylesheet" type="text/css">

<?php
	/* mt_rad(); adapted from: 			
			http://www.ibm.com/developerworks/opensource/library/os-php-gamescripts1/index.html		 
		*/
		

$diceimgs = array(1 => "<img src='images/d1.gif'>", "<img src='images/d2.gif'>", "<img src='images/d3.gif'>", "<img src='images/d4.gif'>", "<img src='images/d5.gif'>", "<img src='images/d6.gif'>", );



function di1($r1)
{
	return $r1;
}
function di2($r2)
{
	return $r2;
}
?>


</head>

<body>
<?php	
			echo '<div id ="main">';	

	$FirstDi = di1(mt_rand(1,6));
	$SecondDi = di2(mt_rand(1,6));
	
	$roll1 = $FirstDi + $SecondDi;
	echo $diceimgs["$FirstDi"] . $diceimgs["$SecondDi"] . "<br />";

			
										
											
if (is_numeric($_POST['bet']))
{
		
		$bet = $_POST['bet'];
			
			
			

		
		
		// First Roll 
		if ($roll1 == 7 || $roll1 == 11)
		{
			echo 'You rolled a ' . $roll1 . '<br />';
			echo '<span class = "losetext">You Lose! </span><br />';
			echo "You now have $0";
			echo "<form name = 'LosePlayAgain'  method = 'post' action = 'home.php'> 
			<input type = 'submit' name = 'Submit' value = 'Play Again'  />
			</form> ";
		}
		elseif  ($roll1 == 2 || $roll1 == 3)
		{
			$win = $bet * 2;
			echo 'You rolled a ' . $roll1 . '<br />';
			echo '<span class = "wintext">You Win! </span><br />';
			echo "You now have \$$win";
			echo "<form name = 'WinPlayAgain'  method = 'post' action = 'home.php'> 
			<input type = 'submit' name = 'Submit' value = 'Play Again'  />
			</form> ";	
		
		
		}
			elseif  ($roll1 == 12)

		{
			$draw = $bet;
			echo 'You rolled a ' . $roll1 . '<br />';
			echo '<span class = "drawtext">Draw! </spam><br />';
			echo "You still have \$$draw";
			echo "<form name = 'DrawPlayAgain'  method = 'post' action = 'home.php'> 
			<input type = 'submit' name = 'Submit' value = 'Play Again'  />
			</form> ";	
		
		
		}
		else{
			echo 'You rolled a ' . $roll1 . '<br />';
			echo " <form name = 'rollagain'  method = 'post' action = 'rollagainnopass.php'>You need a <input type = 'text' size = '2' name = 'roll'  value = $roll1 readonly> <br />";
			echo 'Roll Again <br />';
			echo "You wagered &nbsp; \$<input type = 'text' size = '10' name = 'bet'  value = $bet readonly>  &nbsp; on the dark side. <br />
			<input type = 'submit' name = 'Submit' value = 'Roll'  />
			</form> ";	
		}
		
}
else
{
	echo '<span class="losetext">Please submit a valid bet.</span>';
	
}
		echo '</div>';	

			
?>
</body>
</html>