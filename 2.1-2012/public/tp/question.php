<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Trivial Pursuit</title>
<link href="style.css" rel="stylesheet" type="text/css">


<?php
function rolldi($di)
{
return $di;
}
function questionchooser($q)
{
return $q;
}
$spinimgs = array(1 => "<img src='images/spingreen.gif'>", "<img src='images/spinblue.gif'>", "<img src='images/spinyellow.gif'>", "<img src='images/spinpink.gif'>", "<img src='images/spinpurple.gif'>", "<img src='images/spinorange.gif'>", );
?>



</head>

<body>
<div id = "content">
<p><img src = 'images/title.png' alt = 'title' /></p>



<?php 



	
$fname = $_POST['first'];
$lname = $_POST['last'];
$nname = $_POST['nname'];
	

$dbc = @mysqli_connect ("sql5c40b.carrierzone.com", "taralerias629126", "908tBuffs" , "phpmy1_taralerias_com") OR die (' Connection to MySQL failed: ' . mysqli_connect_error() );


$roll = rolldi(mt_rand(1,6));
$thequestion = questionchooser(mt_rand(1,10));

  echo $spinimgs["$roll"] . "<br />";

?>


<?php

	//science and nature 
		if ($roll == 1) {
		echo 'Science and Nature <br />';
		
				$question = "SELECT question FROM green WHERE id = $thequestion";
				$choice = "green";
				$questionchoice = "SELECT answer FROM green WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
				$therightanswer = $areveal['answer'];
				echo "<br />";

			}
						}
		}
						

	
	//geography
		elseif  ($roll == 2) {
		echo 'Geography <br />';
		
				$question = "SELECT question FROM blue WHERE id = $thequestion";
				$choice = "blue";
				$questionchoice = "SELECT answer FROM blue WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
	
				$therightanswer = $areveal['answer'];
				echo "<br />";
			
			}

						}
		}
	//history
		elseif ($roll == 3) {
		echo 'History <br />';
		
				$question = "SELECT question FROM yellow WHERE id = $thequestion";
				$choice = "yellow";
				$questionchoice = "SELECT answer FROM yellow WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
	
				$therightanswer = $areveal['answer'];
				echo "<br />";
			
			}

						}
		}
	
	//entertainment
		elseif ($roll == 4) {
		echo 'Entertainment <br />';
		
				$question = "SELECT question FROM pink WHERE id = $thequestion";
				$choice = "pink";
				$questionchoice = "SELECT answer FROM pink WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
		
				$therightanswer = $areveal['answer'];
				echo "<br />";
			
			}

						}
		}
	//arts and lit
		elseif ($roll == 5) {
		echo 'Arts and Literature <br />';
		
				$question = "SELECT question FROM purple WHERE id = $thequestion";
				$choice = "purple";
				$questionchoice = "SELECT answer FROM purple WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
	
				$therightanswer = $areveal['answer'];
				echo "<br />";
			}

						}
		}
						
	//sports and leisure
		elseif ($roll == 6) {
		echo 'Sports and Leisure <br />';
		
				$question = "SELECT question FROM orange  WHERE id = $thequestion";
				$choice = "orange";
				$questionchoice = "SELECT answer FROM orange WHERE id = $thequestion";
	
		$responsechecker = mysqli_query($dbc, $questionchoice);
		if ($responsechecker){
					while ($areveal = mysqli_fetch_array($responsechecker))
			{
	
				$therightanswer = $areveal['answer'];
				echo "<br />";
		
			}

						}
		}
						
						


	

				

	$username = "INSERT INTO users (fname, lname, nname) VALUES ('$fname', '$lname', '$nname')"; 
	
	
			$loginresult = mysqli_query($dbc, $username);
				if ($loginresult){
					
					

					
		$result = mysqli_query($dbc, $question);
				if ($result){
					
					
					
					while ($qreveal = mysqli_fetch_array($result))
			{
				echo $qreveal['question'];
				echo "<br />";
			
			}
				}  
	

				
					else{
    print mysqli_error($dbc);
    } 						
						
						
						
						
						
						echo "
<form name = 'answerform' method = 'POST' action = 'answer.php'>

<table>
 <tr>
 	<td>
    Your Answer: 
    </td>
  	<td>
        <input type = 'text' name = 'answers' size = '50'>
        
      </td>
      </tr>
      <tr>
        <td colspan = '2' align = 'center'>
		--lowercase only--
       </td>
	   </tr>
	   <tr>
	   <td colspan = '2'>
	   
	   
	    <input type = 'submit' value = 'Final Answer' />   
         <input type = 'hidden' name = 'trueanswer' size = '50' value = '$therightanswer'>
         <input type = 'hidden' name = 'choice' size = '50' value = '$choice'>
         <input type = 'hidden' name = 'nname' size = '50' value = '$nname'>

        </td>
        </tr>
   </table>
   </form>
   ";	

				}  
	

				
					else{
					header('Location: loginagain.php');
    } 
	
	
	
	
	
 mysqli_close($dbc);
 
 
	

	






 
 
 ?>
 </div>
 
</body>
</html>