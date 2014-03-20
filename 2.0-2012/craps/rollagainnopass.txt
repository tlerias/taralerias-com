<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Craps</title>
<link href="crapstyleDPL.css" rel="stylesheet" type="text/css">

<?php

$diceimgs = array(1 => "<img src='images/d1.gif'>", "<img src='images/d2.gif'>", "<img src='images/d3.gif'>", "<img src='images/d4.gif'>", "<img src='images/d5.gif'>", "<img src='images/d6.gif'>", );

function di1ra($r1)
{
	return $r1;
}
function di2ra($r2)
{
	return $r2;
}




?>
</head>
<?php


	echo '<div id ="main">';	


$FirstRA = di1ra(mt_rand(1,6));
$SecondRA = di2ra(mt_rand(1,6));
	
$rollAgain = $FirstRA + $SecondRA;
echo $diceimgs["$FirstRA"] . $diceimgs["$SecondRA"] . "<br />";
	
	
	
	$bet = $_POST['bet'];
	$roll2 = $_POST['roll'];

if ($roll2 == $rollAgain)
		{
			echo 'You rolled a ' . $rollAgain . '<br />';
			echo '<span class = "losetext">You Lose. </span><br />';
			echo "You now have $0!";
			echo "<form name = 'LosePlayAgain'  method = 'post' action = 'home.php'> 
<input type = 'submit' name = 'Submit' value = 'Play Again'  />
</form> ";	
		}
		elseif ($rollAgain == 7)
		{
			$win = $bet * 2;
			echo 'You rolled a ' . $rollAgain . '<br />';
			echo '<span class = "wintext">You Win! </span><br />';
			echo "You now have \$$win!";
			echo "<form name = 'winPlayAgain'  method = 'post' action = 'home.php'> 
<input type = 'submit' name = 'Submit' value = 'Play Again'  />
</form> ";	
		}
		else
		{
			echo 'You rolled a ' . $rollAgain . '<br />';
			echo "<form name = 'rollagain'  method = 'post' action = 'rollagainnopass.php'>You need a  <input type = 'text' size = '2' name = 'roll'  value = $roll2 readonly>  <br />";
			echo 'Roll Again <br />';
			echo "You wagered &nbsp;  \$<input type = 'text' size = '10' name = 'bet'  value = $bet readonly> &nbsp; on the dark side. <br />
<input type = 'submit' name = 'Submit' value = 'Roll'  />
</form> ";	
		}
	echo '</div>';	

?>
<body>
</body>
</html>