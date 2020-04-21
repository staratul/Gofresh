<?php

	include '../connection.php';
	error_reporting(0);
	if(isset($_POST['submit']))
	{
		session_start();
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$add = $_POST['add'];
		$city = $_POST['city'];

		$sql = "UPDATE user SET name='$name', password='$pass', email='$email',
			 mobile='$mobile', address='$add', city='$city' WHERE id='$id'";

		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "<script>alert('Data Updated Successfully');</script>";
			header('location:userprofile.php');
		}
		else
		{
			echo "Error";
			header('location:edit_details.php');
		}
	}
	
