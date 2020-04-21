<?php
include 'header.php';
?>

<form action="signup_code.php" method="post" class="signup_form">
	<div class="wrapper" id="wrapper_sign">
		<div class="top_sign">
			<h1>Register</h1>
			<div class="form">
				<div class="input_field">
					<input type="text" placeholder="USERNAME" name="name" required="">
				</div>
				<div class="input_field">
					<input type="password" placeholder="PASSWORD" name="pass" required="">
				</div>
				<div class="input_field">
					<input type="text" placeholder="EMAIL" name="email" required="">
				</div>
				<div class="input_field">
					<input type="text" placeholder="MOBILE" name="mobile" required="">
				</div>
				<div class="input_field">
					<input type="text" placeholder="ADDRESS" name="add" required="">
				</div>
				<div class="input_field">
					<input type="text" placeholder="CITY & PIN" name="city" required="">
				</div>
				<div class="btn">
					<input type="submit" value="Register" name="">
				</div>
			</div>
		</div>
		<div class="bottom">
			<span>Already Register?<a href="login.php">  Login here?</a></span>
		</div>
	</div>
</form>

<?php
	include 'footer.php';
?>




