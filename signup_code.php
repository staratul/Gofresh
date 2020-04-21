
<?php
include 'connection.php';

$name = $_POST['name'];
$pwd = $_POST['pass'];
//$password = md5($pwd);
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['add'];
$city = $_POST['city'];

$sql = "INSERT INTO user (name,password,email,mobile,address,city) VALUES 
		('$name', '$pwd', '$email', '$mobile', '$address', '$city')";

$result = mysqli_query($conn, $sql);

if($result)
{
	header("Location: login.php");
}
else
{
	echo "Errror : ".$sql;
}



?>