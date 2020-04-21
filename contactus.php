<?php
include 'header.php';
error_reporting(0);
?>
<?php
	session_start();
	$id = $_SESSION['id'];
	if($id > 1)
	{

	}
	else
	{
		?>
			<script type="text/javascript">
			alert('Make sure you are login befour using contact, if not please login first');
			</script>
		<?php
	}
?>



<form action="contact_code.php" method="post" class="contact_form">
<div class="contactus">
	<h1>Contact Us</h1>
	<div class="con_input_field">
		<input type="text" name="name" required="">
		<label>Name</label>
	</div>
	<div class="con_input_field">
		<input type="email" name="email" required="">
		<label>Email</label>
	</div>
	<div class="con_input_field">
		<input type="tel" name="mobile" required="">
		<label>Mobile</label>
	</div>
	<div class="con_input_field">
		<textarea rows="3" required="" name="message"></textarea>
		<label>Message</label>
	</div>
	<input type="submit" value="Send Message" name="submit" class="con_btn">
</div>
</form>

<?php
	include 'footer.php';
?>