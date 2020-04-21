<?php
include 'header.php';
?>


<?php
session_start();
$uid = $_SESSION['id'];
if($uid > 1)
{
?>
<div class="container-fluid cart_container_fluid">
<div class="container" id="add_cart_container">
	<div class="row" id="add_cart_row">
		<div class="col-md-12" id="add_cart_col">
			<table class="add_cart_table">
				<tr>
					<th>S No</th>
					<th>Image</th>
					<th>Name</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>price</th>
					<th>Unit</th>
					<th>Dedcription</th>
					<th>Buy Now</th>
					<th>Remove</th>
				</tr>
<?php
include 'connection.php';
error_reporting(0);
$sql = "SELECT * FROM cart WHERE userid='$uid'";
$run = mysqli_query($conn, $sql);
if($row = mysqli_num_rows($run)>0)
{
	$count = 0;
	$tp = 0;
	while($data = mysqli_fetch_assoc($run))
	{
		$count++;
		$image = $data['pimage'];
		$name = $data['pname'];
		$cat = $data['pcategory'];
		$quantity = $data['pquantity'];
		$price = $data['pprice'];
		$unit = $data['punit'];
		$desc = $data['pdescription'];
		$totalprice = $price * $quantity;
		$tp = $totalprice + $tp;
?>
<tr>
	<td><?php echo $count;?></td>
	<td><img src="admin/upload/<?php echo $image;?>"></td>
	<td><?php echo $name; ?></td>
	<td><?php echo $cat; ?></td>
	<td><?php echo $quantity; ?></td>
	<td><?php echo $price; ?></td>
	<td><?php echo $unit; ?></td>
	<td><?php echo $desc; ?></td>
	<td>
<a href="buy_cart_single.php?cid=<?php echo $data['id']; ?>">BUY NOW</a>
	</td>
	<td><a href="deletecart.php?cid=<?php echo $data['id']; ?>">REMOVE</a></td>
</tr>
<?php
	}
}
else
{
?>
<div class="No_cart_data" style="width: 100%;height: 400px;background: lightblue;text-align: center;padding: 30px;">
	<h2>You Don't have Any Cart</h2>
	<h3><a href="index.php">Shopping Now</a></h3>
</div>
<?php
}
?>	
<tr>
	<td colspan="10"><b>Total Price: -> <?php echo $tp; ?></b>
<p>
<a href="buy_cart_all.php?uid=<?php echo $_SESSION['id'];?>">Buy All</a>
</p>
</td>
</tr>		
</table>
</div>		
</div>
</div>
</div>
<?php
}
else
{
	header('location:login.php');
}
?>




<?php
	include 'footer.php';
?>





