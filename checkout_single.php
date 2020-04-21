
<?php
	include 'connection.php';
	//error_reporting(0);
	session_start();
	$uid = $_SESSION['id'];

	$sql = "SELECT * FROM user WHERE id='$uid'";
	$run = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($run);
	$emailid = $data['email'];

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

		$mail->setFrom(EMAIL, 'Go Fresh');
		$mail->addAddress($emailid);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo(EMAIL);
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = "Thanks for shooping from GO FRESH.";
		$mail->Body    = "Your product Will be dilever soon";
		$mail->AltBody = "Have a Good Day.";

		if(!$mail->send()) 
		{
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
		else 
		{
		    echo "<script>alert('Thanks for shopping from Go Fresh');</script>";
		    header('location:delete_single_cart.php');
		}
?>



