<?php
include '../connection.php';
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
		$city = $row['city'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Fresh</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
</head>
<body style="background: #F8F8F8">
<div class="user_all">
	<div class="container-fluid" id="user_header_container">
		<div class="row" id="user_herder_row">
			<div class="col-sm-4" id="user_header_col_4">
				<a href="backhome.php">Go Fresh</a>
			</div>
			<div class="col-sm-8" id="user_header_col_8">
				<a href="../show_add_cart.php">Add To Cart</a>
			</div>
		</div>
	</div>
	<div class="container" id="user_main_container">
		<div class="row" id="user_main_row">
			<div class="col-sm-3" id="user_main_col_4">
				<a class="logo" href="backhome.php">Shopping Now</a>
				<p>Hello,
					<br><a href="userprofile.php"><b> <?php echo $name; ?></b></a>
				</p>
				<p><a href="edit_details.php">Edit Details</a></p>
				<p><a href="myorder.php">My Order</a></p>
				<p><a href="mymessage.php">My Message</a></p>
				<p><a href="review.php">Review</a></p>
				<p><a href="logout.php">Logout</a></p>
			</div>
			<div class="col-sm-9" id="user_main_col_8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>


