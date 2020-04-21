<?php
	include 'header.php';
?>

<?php
	include 'connection.php';
	error_reporting(0);
	
	$pid = $_GET['pvid'];
	$sql = "SELECT * FROM product WHERE id='$pid'";
	$run = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($run);

	$image = $data['image'];
	$name = $data['name'];
	$category = $data['category'];
	$unit = $data['quantity'];
	$price = $data['price'];
	$desc = $data['description'];
?>


<div class="container-fluid view_more_body">
	<div class="container view_more_con">
		<div class="row">
			<div class="col-md-4 view_more_col1">
				<div class="view_img">
					<img src="admin/upload/<?php echo $image;?>">
				</div>
			</div>
			<div class="col-md-8 view_more_col2">
				<b>Product Name:</b>
				<label><?php echo $name;?></label><hr>
				<b>Product Category:</b>
				<label><?php echo $category;?></label><hr>
				<b>Product Quantity:</b>
				<label><?php echo $unit;?></label><hr>
				<b>Product Price:</b>
				<label><?php echo $price;?></label><hr>
				<b>Add Quantity:</b>
<form method="post" action="view_more_buy.php">
				<label>
					<input type="text" name="quantity" value="1" class="form-control">
				</label>
<p class="vbtn">
	<input type="hidden" name="pid" value="<?php echo $data['id']; ?>">
	<input type="submit" name="buy_now" class="btn btn-primary" value="BUY NOW">
	<input type="submit" name="cart_add"  class="btn btn-primary atc" value="Add To Cart">
</p>
</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 view_desc">
				<b>Product Description:</b>
				<label><?php echo $desc;?></label><hr>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
</div>




<?php
	include 'footer.php';
?>