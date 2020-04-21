<?php
	include 'user_header.php';
?>

<?php
	include 'main_content.php';
?>

	<div>
		<p>This is Review Page</p>
		<form action="" method="post" class="review_form">
			<label>Enter Your Reivew for Website</label>
			<textarea required="" name="review" class="form-control"></textarea>
		<div class="review_btn">
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
		</form>
	</div>

	<?php
		include '../connection.php';
		error_reporting(0);

		if(isset($_POST['submit']))
		{
			session_start();
			$id = $_SESSION['id'];
			$name = $_SESSION['name'];
			$review = $_POST['review'];

			$sql = "INSERT INTO review (userid,username,review) VALUES 
				('$id', '$name', '$review')";

			$result = mysqli_query($conn, $sql);
			if($result)
			{
				header('location:userprofile.php');
			}
			else
			{
				header('location:review.php');
			}
		}
		else
		{

		}
	?>

<?php
	include 'footer.php';
?>