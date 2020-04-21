<?php

session_start();
$uid = $_SESSION['id'];
if($uid > 1)
{
	if(isset($_POST['add_to_cart']))
	{
		include 'connection.php';
		$proid = $_POST['pid'];
		$quantity = $_POST['quantity'];
		$sql = "SELECT * FROM product WHERE id='$proid'";
		$run = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		$name = $data['name'];
		$category = $data['category'];
		$price = $data['price'];
		$unit = $data['quantity'];
		$desc = $data['description'];
		$image = $data['image'];
		$userid = $uid;

		$query = "INSERT INTO CART (productid,userid,pname,pcategory,pprice,punit,
				pdescription,pquantity,pimage) VALUES ('".$id."', '".$userid."', '".$name."','".$category."', '".$price."', '".$unit."', '".$desc."', 
				'".$quantity."', '".$image."')";

		$result = mysqli_query($conn, $query);

		if($result == TRUE)
		{
			header('location:index.php');
			exit(0);
		}
		else
		{
			echo "<script>alert('Prodcut Not Added in Cart');</script>";
		}
	}
}
else
{
	header('location:login.php');
}

?>




