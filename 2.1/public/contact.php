<html>
<head>
<title>Contact Me - Tara Lerias</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="nav">
<table id="Table_01" width="335" height="405" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6">
			<img src="images/index_2_01.jpg" width="335" height="72" alt=""></td>
	</tr>
	<tr>
		<td rowspan="7">
			<img src="images/index_2_02.jpg" width="33" height="332" alt=""></td>
		<td rowspan="7">
			<a href="home.html" target="_self">
				<img src="images/Home.jpg" width="69" height="332" border="0" alt="Home"></a></td>
		<td rowspan="7">
			<img src="images/index_2_04.jpg" width="21" height="332" alt=""></td>
		<td>
			<a href="aboutme.html" target="_self">
				<img src="images/aboutme.jpg" width="136" height="27" border="0" alt="about me"></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/index_2_06.jpg" width="76" height="51" alt=""></td>
	</tr>
	<tr>
		<td>
			<a href="resume.html" target="_self">
				<img src="images/resume.jpg" width="136" height="24" border="0" alt="resume"></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="adv.html" target="_self">
				<img src="images/advertising.jpg" width="173" height="33" border="0" alt="advertising"></a></td>
		<td>
			<img src="images/index_2_09.jpg" width="39" height="33" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href="gd.html" target="_self">
				<img src="images/graphic-design.jpg" width="212" height="30" border="0" alt="graphic design"></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="wd.html" target="_self">
				<img src="images/web-design.jpg" width="173" height="31" border="0" alt="web design"></a></td>
		<td rowspan="3">
			<img src="images/index_2_12.jpg" width="39" height="218" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="contact.html" target="_self">
				<img src="images/contact.jpg" width="173" height="23" border="0" alt="contact"></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/index_2_14.jpg" width="173" height="164" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="33" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="69" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="21" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="136" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="39" height="1" alt=""></td>
	</tr>
</table>
</div>

<div id = "content">
<fieldset><legend>Social Media</legend>

              <a href = "http://tlerias.tumblr.com" target = "_blank"> tumblr</a> &nbsp; | &nbsp; <a href = "http://twitter.com/#!/tlerias" target = "_blank"> twitter</a>  &nbsp; | &nbsp; <a href = "http://www.facebook.com/tlerias" target = "_blank"> facebook</a> 
               &nbsp; | &nbsp; <a href = "http://www.linkedin.com/pub/tara-lerias/22/a8a/51a" target = "_blank"> linked in</a> 
                &nbsp; | &nbsp; <a href = "http://foursquare.com/user/tlerias" target = "_blank"> foursquare</a> 
           
                     </fieldset>
<fieldset><legend>Email Me </legend>
                    
<?php
				   
				   if(isset($_POST['email'])) {
     
    $email_to = "tlerias@gmail.com";
    $email_subject = "New Email from Website";
     
     
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['comments'])) 
		
		{
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['name'];
    $email_from = $_POST['email']; 
    $subject = $_POST['subject'];
    $comments = $_POST['comments']; 
     
    $error_message = "";
    $email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!eregi($string_exp,$subject)) {
    $error_message .= 'The Subject you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
				   
?>				   

	Thank you for contacting me! I will be in touch as soon as possible.
 
<?php
}
?>

                     </fieldset>

</div>
</body>
</html>
