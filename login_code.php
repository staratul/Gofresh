<?php

include 'connection.php';




	$email = $_POST['email'];
	$pwd = $_POST['password'];
	//$password = md5($pwd);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$pwd'";

	$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		$email = $row['email'];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		if($id == 1)
		{
			header("location:admin/dashboard.php");
			exit(0);
		}
	}
	header("location:user/userprofile.php");
}
else
{
	echo "<script>alert('Invalid Email or Password');</script>";
	header("location:login.php");
}

?>