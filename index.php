<?php

	include 'connection.php';
	error_reporting(0);

	$sql = "SELECT * FROM product ORDER BY id DESC";

	$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Fresh</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
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
					session_start();
					$uid = $_SESSION['id'];
					if($uid > 1)
					{
						?>
						<li><a href="user/userprofile.php">Profile</a></li>
						<li><a href="show_add_cart.php"><i class="fas fa-shopping-cart"  ></i>Cart</a></li>
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
<!-------------------------Slider Open---------------------->
		<div class="image-slider">
			<div id="slider">
				<figure>
					<img src="img/20.jpg">
					<img src="img/22.jpg">
					<img src="img/23.jpg">
					<img src="img/24.jpg">
					<img src="img/20.jpg">
				</figure>
			</div>
		</div>
<!------------------------Welcome Text Open-------------------------->
		<div class="container" id="welcome-title">
		  <h1>Welcome to our healthy farm!</h1>
		</div>
		<div class="container" id="welcome-main">
		  <div class="row">
		    <div class="col bg" id="welcomme-text">
		    	<h1>1.</h1>
		    	<h4>Best Quality Product</h4>
		    	<p>We stand for providing the most fresh orginc product which
		    		will serve you health and be a source of vitamins and 
		    		minarls for our clients.</p>
		    </div>
		    <div class="col bg" id="welcomme-text">
		    	<h1>2.</h1>
		    	<h4>Farmer Product</h4>
		    	<p>We work with many farms to provide you with natural product
		    		grown with love and care with no GMO or pesticides.</p>
		    </div>
		    <div class="col bg" id="welcomme-text">
		    	<h1>3.</h1>
		    	<h4>Fast Delivery</h4>
		    	<p>We want our clients recive theri fresh product as soon as 
		    		possible, so we processs and ship the order at once.</p>
		    </div>
		  </div>
		</div>
<!--------------------------Our Product Open------------------------->

<div class="container" id="our_product">  
	<h2>New Arrivals</h2>
    <div class="row" id="first_div_row">
<?php
    	if(mysqli_num_rows($result)>0)
	{
		while($data = mysqli_fetch_assoc($result))
		{
			session_start();
			$_SESSION['proid'] = $data['id'];
?>
<div class="col-md-3" id="first_div_column"><br><br>
    <div class="card">
        <div class="card-body text-center">
          <img src="admin/upload/<?php echo $data['image']; ?>" class="card-img" height="60%"]>
          <p class="card-title"><i><?php echo $data['name'];?></i></p>
          <b><p class="card-text">₹<?php echo $data['price'];?>.00</p></b>

<form action="addcart.php" method="post">

<input type="text" name="quantity" value="1" class="form-control">
<input type="hidden" name="pid" value="<?php echo $data['id']; ?>">
<input type="submit" class="btn btn-info" name="add_to_cart" value="Add to Cart">
<a href="view_more.php?pvid=<?php echo $data['id'];?>"  class="btn btn-primary">View</a>

</form>


                </div>
             </div>
        </div>
         <?php 
            }
          }
          ?>
      </div>
  </div>


<!------------------------------End Product------------------------------->

<!--------------------------Letest From The Blog-------------------------->

<div class="container-fluid" id="blog">
	<h1>Letest From The Blog</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="product-top" id="product-img">
					<img src="img/7.jpg">
				</div>
				<div class="product-bottom text-center" id="blog-text">
					<h4>Your Health</h4>
					<p>Health Benifits of a row Food</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-top" id="product-img">
					<img src="img/14.jpg">
				</div>
				<div class="product-bottom text-center" id="blog-text">
					<h4>Your Health</h4>
					<p>Health Benifits of a row Food</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-top" id="product-img">
					<img src="img/19.jpg">
				</div>
				<div class="product-bottom text-center" id="blog-text">
					<h4>Your Health</h4>
					<p>Health Benifits of a row Food</p>
				</div>
			</div>
		</div>
	</div>

<!------------------------End Letest From The Blog-------------------------->	


<!------------------------Start Footer------------------------------------>
	<div class="container-fluid" id="footer">
		<h1>Go Fresh</h1>
		<div class="row" id="footer-row">
			<div class="col-md-3" id="footer-col-1">
				<h3>About Website</h3>
				<p>
					We stand for providing the most fresh orginc product which
		    		will serve you health and be a source of vitamins and 
		    		minarls for our clients.
				</p>
			</div>
			<div class="col-md-3" id="footer-col-2">
				<h3>Customer Services</h3>
				<p class="cs">
					<li class="pr"><a href="index.php">Home</a></li>
					<li class="pr"><a href="review.php">Review</a></li>
					<li class="pr"><a href="aboutus.php">About</a></li>
					<li class="pr"><a href="contactus.php">Contact</a></li>
					<li class="pr"><a href="login.php">Login</a></li>
					<li class="pr"><a href="signup.php">Signup</a></li>
				</p>
			</div>
			<div class="col-md-3" id="footer-col-3">
				<h3>Products</h3>
				<p class="pr">
					<li class="pr"><a href="#">Vegitables</a></li>
					<li class="pr"><a href="#">Fruits</a></li>
					<li class="pr"><a href="#">Seeds</a></li>
					<li class="pr"><a href="#">Crops</a></li>
					<li class="pr"><a href="#">Masala</a></li>
				</p>
			</div>
			<div class="col-md-3" id="footer-col-4">
				<h4>Contact Details</h4>
				<p>
					b-3/2343, 54 Foota Road,<br>
					Yamuna Vihar, Shyam Nagar,<br>
					Delhi-2330003, India.
				</p>
			</div>
		</div>
	</div>


<!------------------------End Footer------------------------------------>
	</div>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".humburger").click(function(){
				$(".nav-bar-right").toggleClass("active");
			});
		});
	</script>
</body>
</html>