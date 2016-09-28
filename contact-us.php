<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Us - Contact Us | IT MERGE</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
   <link href="style_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page5">
<div class="tail-top-right"></div>
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <!-- header -->
      <div id="header">
	      <ul class="list">
          <li><a href="home.html"><img src="images/icon1.gif" alt="" /></a></li>
          <li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>
        </ul>
        <ul class="site-nav">
          <li><a href="home.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li class="last"><a href="contact-us.html">Contact Us</a></li>
        </ul>
        <div class="logo"><h1 style= "font-size: 300%";>IT MERGE</h1></div>

      </div>
      <!-- content -->
      <div id="content">
        <h3 style="color:brown";><strong>Contact Us</strong></h3>
        <p class="p1">
		Vajeevan Kaneshananthan, <br>
		90 Perth Road, <br>
		London. <br>
		IG2 6AR. <br>
		Telephone: 02081338542 <br>
		Mobile: 07734309068 /07553093813 <br>
		Email:info@itmerge.co.uk.<br><br></p>

		 <h3 style="color:brown"><strong>Fill in Contact Form</strong></h3>
            <p><strong>For more information, or a free quotation, simply complete our contact form below.  We usually respond to all enquiries within 1 working day.</strong></p><br>

<form name="htmlform" method="post" action="">
<table width="600px">
</tr>
<tr>
 <td valign="top">
  <label for="first_name">Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="40" size="60">
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="40" size="60">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="60">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Message *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="40" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">  
 </td>
</tr>
</table>
</form>
      </div>
      <!-- footer -->
      <div id="footer">
        <div class="indent">
          <div class="fleft">Copyright 2012 - 2016 IT Merge. All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "vajeevan@itmerge.co.uk";
     
    $email_subject = "website form submissions";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
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
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
die();
?>