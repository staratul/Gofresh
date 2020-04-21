<?php
	include 'user_header.php';
?>

<?php
	include 'main_content.php';
?>

	<div>
		<p>This is My Order Page</p>
		<table class="show_myorder">
			<tr>
				<th>S No</th>
				<th>Image</th>
				<th>Name</th>
				<th>Category</th>
				<th>Unit</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Date</th>
			</tr>
<?php
include '../connection.php';
error_reporting(0);
session_start();
$uid = $_SESSION['id'];

$sql = "SELECT * FROM myorder WHERE userid='$uid'";
$run = mysqli_query($conn, $sql);
if($row = mysqli_num_rows($run)>0)
{
	$count = 0;
	$tp = 0;
	while($data = mysqli_fetch_assoc($run))
	{
		$count++;
		$name = $data['proname'];
		$cat = $data['procat'];
		$unit = $data['prounit'];
		$qnt = $data['proqnt'];
		$price = $data['proprice'];
		$image = $data['proimage'];
		$date = $data['orderdate'];
		$totalprice = $price * $qnt;
		$tp = $tp + $totalprice;
?>
<tr>
<td><?php echo $count;?></td>
<td><img src="../admin/upload/<?php echo $image;?>" style="height: 50px; width: 70px;"></td>
<td><?php echo $name;?></td>
<td><?php echo $cat;?></td>
<td><?php echo $unit;?></td>
<td><?php echo $qnt;?></td>
<td><?php echo $price;?></td>
<td><?php echo $date;?></td>
</tr>
<?php
	}
}
?>
<tr>
	<td colspan="8">Total Price-><b><?php echo $tp;?></b></td>
</tr>
</table>
</div>



<?php
	include 'footer.php';
?>