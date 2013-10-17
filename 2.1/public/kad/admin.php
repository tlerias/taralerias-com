<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin</title>
</head>

<body>
<?php
$host = 'sql5c40b.carrierzone.com';
$user = 'qxx4l79omy859598';
$pass = 'Brownie890';
$database = 'main_qxx4l79o_myutilitydomain_com';
$table = 'member';
$redirect = 'login.html';
 
mysql_connect($host, $user, $pass);
mysql_select_db($database);


$username = mysql_real_escape_string($_POST['username']);
$password = hash('sha512', $_POST['password']);
 
$result = mysql_query("SELECT * FROM $table WHERE username = '$username' AND password = '$password'");


if(mysql_num_rows($result))
{

	echo 'Welcome Kinsey! <br />';
	echo '<p><a href = "add.php" target = "_blank"> I would like to Add Files </a></p>';

	echo'Which section would you like to  make changes to? <br />';
	echo  '<form action="edit.php" method="POST"> 
            <p>Section:
            <select name="selection"> 
			<option value="me"> More Than a Resume </option> 
			<option value="strategy"> Strategy </option> 
			<option value="brandaudit"> Brand Audits </option> 
			<option value="blog"> Blog Posts </option> 
			<option value="print"> Print Ads </option> 
			<option value="web"> Web Copy </option> 
			<option value="leadership"> Leadership </option>
			<option value="misc"> Miscellaneous </option> 
 

			</select> 
            <br /> 
            <br /> 
            <input type="submit" value="Submit"> 
			</p>';
	










}
else
{
  echo '<p><strong>Error:</strong> Invalid username or password.</p>';
}



?>
</body>
</html>