<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>tara lerias . com</title>
<link rel="shortcut icon" href="images/favicon.ico" />

<link href="style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="website.js"></script> 
</head>

 


<body><div id = 'header'>
<a href="index.html"><img src = "images/name90.png" alt = "tara lerias" /></a>
    </div>
    
    
<div id = "parent">
    
        
        <div id = "nav1">
                <a 
                onmouseover="ddopen('navdd1')" 
                onmouseout="ddctime()"><img src="images/barone.jpg" /></a> 
                <div id="navdd1" 
                    onmouseover="cancelctime()" 
                    onmouseout="ddctime()"> 
                <a href="aboutme.html">about me</a> <br />

                <a href="resume.html">resume</a>  <br />

        		 </div>
                
     </div>
          
<br />
<br />
<br />
<br />
<br />
<br />


         <div id = "nav2">

                <a 
                onmouseover="ddopen('navdd2')" 
                onmouseout="ddctime()"><img src="images/bartwo.jpg" /></a> 
                <div id="navdd2" 
                    onmouseover="cancelctime()" 
                    onmouseout="ddctime()"> 
                <a href="pd.html" >personal designs</a> <br />
				<a href="adv.html">advertising </a> <br /> 
                <a href="marketing.html" >marketing</a> <br />
				<a href="tam.html">technology, arts and media </a> <br />


                
                </div>
         </div>
<br />
<br />
<br />
<br />
<br />
<br />
          <div id = "nav3">
 
                 <a 
                onmouseover="ddopen('navdd3')" 
                onmouseout="ddctime()"><img src="images/barthree.jpg" /></a> 
                <div id="navdd3" 
                    onmouseover="cancelctime()" 
                    onmouseout="ddctime()"> 
                <a href="contact.html">contact</a> <br />
                
                </div> 
                
              </div>
            
                        <div id = "content">

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
                        

                        </div>
</div>

</body>
</html>