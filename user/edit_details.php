<?php
	include 'user_header.php';
?>

<?php
	include 'main_content.php';
?>

	<div>
		<h4>This is My Edit Details Page</h4>
	<form action="edit_details_code.php" method="post">
		<div class="edit_form">
			<div class="input_field">
				<span>Name:</span>
				<input type="text" class="form-control" value="<?php echo $name; ?>" name="name" required="">
			</div>
			<div class="input_field">
				<span>Password:</span>
				<input type="password" class="form-control" value="<?php echo $pass; ?>" name="pass" required="">
			</div>
			<div class="input_field">
				<span>Email:</span>
				<input type="text" class="form-control" value="<?php echo $email; ?>" name="email" required="">
			</div>
			<div class="input_field">
				<span>Mobile:</span>
				<input type="text" class="form-control" value="<?php echo $mobile; ?>" name="mobile" required="">
			</div>
			<div class="input_field">
				<span>Address:</span>
				<input type="text" class="form-control" value="<?php echo $address; ?>" name="add" required="">
			</div>
			<div class="input_field">
				<span>City:</span>
				<input type="text" class="form-control" value="<?php echo $city; ?>" name="city" required="">
			</div>
			<div class="btn">
				<input type="submit" class="btn btn-success" value="Update" name="submit">
			</div>
		</div>
	</form>
	</div>

<?php
	include 'footer.php';
?>