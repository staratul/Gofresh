<?php
include 'connection.php';
session_start();
$cid = $_SESSION['cid'];
$userid = $_SESSION['id'];

$query = "SELECT * FROM cart WHERE id='$cid'";
$result = mysqli_query($conn, $query);
if($row = mysqli_num_rows($result)>0)
{
	$totalprice = 0;
	while($data = mysqli_fetch_assoc($result))
	{
		$name = $data['pname'];
		$category = $data['pcategory'];
		$price = $data['pprice'];
		$unit = $data['punit'];
		$quantity = $data['pquantity'];
		$image = $data['pimage'];
		$date = date("Y-m-d H:i:s A");


$sql = "INSERT INTO myorder (userid,proname,procat,prounit,proqnt,proprice,proimage,orderdate) VALUES ('$userid', 
'$name', '$category', '$unit', '$quantity', '$price', '$image', '$date')";

	$run = mysqli_query($conn, $sql);
	if($run == true)
	{
		//echo "Order Added Successfully";
	}
	}

	$qry = "DELETE FROM cart WHERE id='$cid'";
	$myqry = mysqli_query($conn, $qry);
	if($myqry == true)
	{
		header('location:user/myorder.php');
	}
}

?>