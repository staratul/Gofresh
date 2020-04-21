<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="contactform" method="post" action="" enctype="multipart/form-data">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">Subject *</label>
 </td>
 <td valign="top">
  <input  type="text" name="subject" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Message *</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" name="submit" value="Submit">
 </td>
</tr>
</table>
</form>
</body>
</html>



<?php

if(isset($_POST['submit']))
{
	require 'PHPMailerAutoload.php';
	require 'credential.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'Mailer');
$mail->addAddress($_POST['email']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(EMAIL);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}

?>



