<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Fresh</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="nav-bar">
			<div class="humburger">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<div class="nav-bar-left">
				<a href="index.php">Go Fresh</a>
			</div>
			<div class="nav-bar-right">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About</a></li>
					<li><a href="#">Vegitable</a></li>
					<li><a href="#">Fruits</a></li>
					<li><a href="contactus.php">Contact</a></li>
					<?php
					error_reporting(0);
					session_start();
					$uid = $_SESSION['id'];
					if($uid > 1)
					{
						?>
						<li><a href="user/userprofile.php">Profile</a></li>
						<li><a href="addcart.php"><i class="fas fa-shopping-cart"  ></i>Cart</a></li>
						<?php
					}
					else
					{
						?>
						<li><a href="login.php">Login</a></li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>

