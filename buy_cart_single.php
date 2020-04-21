<?php
include 'header.php';
?>

<div class="container-fluid buy_all_fluid">
<div class="container buy_cart_all">
	<div class="row">
		<div class="col-md-12 buy_all_col">
			<div class="buy_user_details">
				<h4>Your Details</h4>
<?php
include 'connection.php';
session_start();
$uid = $_SESSION['id'];
$cid = $_GET['cid'];

$sql = "SELECT * FROM user WHERE id='$uid'";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($run);
?>
<b>Name:</b>
<input type="text" class="form-control" value="<?php echo $data['name'];?>" name="name" disabled="">
<b>Email:</b>
<input type="text" name="email" value="<?php echo $data['email'];?>" class="form-control" disabled="">
<b>Mobile:</b>
<input type="text" name="mobile" value="<?php echo $data['mobile'];?>" class="form-control" disabled="">
<b>Dilavery Address:</b>
<input type="text" name="address" value="<?php echo $data['address'];?>" class="form-control" disabled="">
<b>City:</b>
<input type="text" name="city" value="<?php echo $data['city'];?>" class="form-control" disabled="">
<div class="edit_details_div">
<a href="user/edit_details.php" class="btn btn-success edit_details">Edit Details</a>
</div>
<?php
?>		
</div>
<div class="buy_product_details">
	<h4>Product Details</h4>
	<table>
		<tr>
			<th>S No</th>
			<th>Image</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
<?php
$qry = "SELECT * FROM cart WHERE id='$cid'";
$restul = mysqli_query($conn, $qry);
if($row = mysqli_num_rows($restul)>0)
{
	$count = 0;
	while($data = mysqli_fetch_assoc($restul))
	{
		$count++;
		$cid = $data['id'];
		$image = $data['pimage'];
		$name = $data['pname'];
		$qut = $data['pquantity'];
		$price = $data['pprice'];
		$tp = $price * $qut;
		$totalprice = $totalprice + $tp;
?>
<tr>
	<td><?php echo $count;?></td>
	<td><img src="admin/upload/<?php echo $image;?>" style="height: 70px;width: 70px;"></td>
	<td><?php echo $name; ?></td>
	<td><?php echo $qut; ?></td>
	<td><?php echo $price; ?></td>
</tr>
<?php
	}

	session_start();
	$_SESSION['cid'] = $cid;
}
?>
		<tr>
			<td colspan="5"><b>Total Price: -> <?php echo $totalprice; ?></b></td>
		</tr>
	</table>
</div>
</div>
<div class="checkout_a">
	<a href="checkout_single.php?id<?php echo $cid;?>" class="btn btn-primary">Check Out</a>
	<a href="show_add_cart.php" class="btn btn-primary">Cancle</a>
</div>
</div>
</div>
</div>

<?php
	include 'footer.php';
?>