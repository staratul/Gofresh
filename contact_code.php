<?php
	include 'connection.php';

	if(isset($_POST['submit']))
	{
		session_start();
		$uid = $_SESSION['id'];
		if($uid > 1)
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$message = $_POST['message'];
			$id = $uid;

			$sql = "INSERT INTO message (userid,name,email,mobile,message) VALUES 
				('$id', '$name', '$email', '$mobile','$message')";

			$result = mysqli_query($conn, $sql);
			if($result)
			{
				header('location:contactus.php');
			}
			else
			{
				echo "Error ".$sql;
			}
		}
		else
		{
			header('location:login.php');
		}
	}
?>