<?php
include 'header.php';
error_reporting(0);
?>

<?php
session_start();
$uid = $_SESSION['id'];
if($uid > 1)
{
	header('location:user/userprofile.php');
}
?>

<form action="login_code.php" method="post" class="login_form">
	<div class="wrapper" id="wrapper">
		<div class="top">
			<h1>Login</h1>
			<div class="form">
				<div class="input_field">
					<input type="text" placeholder="EMAIL" name="email" required="">
				</div>
				<div class="input_field">
					<input type="password" placeholder="PASSWORD" name="password" required="">
				</div>
				<div class="btn">
					<input type="submit" value="Login Here" name="">
				</div>
			</div>
		</div>
		<div class="bottom">
			<span><a href="#">Forgot Password?</a></span>&nbsp;&nbsp;
			<span><a href="signup.php">Register!</a></span>
		</div>
	</div>
</form>


<?php
	if(isset($_REQUEST['loginfirst']) && $_REQUEST['loginfirst'] == 1)
	{
		?>
			<script>
				alert('Login First Before Add Product In Cart.');
			</script>
		<?php
	}
?>


<?php
	include 'footer.php';
?>


