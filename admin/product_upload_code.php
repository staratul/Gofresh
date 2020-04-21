<?php

if(isset($_POST['submit']))
{
	include '../connection.php';

	$name = $_POST['name'];
	$category = $_POST['select_cat'];
	$price = $_POST['price'];
	$quantity = $_POST['select_quantity'];
	$desc = $_POST['desc'];
	$imgname = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];

	move_uploaded_file($tempname, "upload/$imgname");

	$qry = "INSERT INTO product (name,category,price,quantity,description,image) VALUES 
			('$name', '$category', '$price', '$quantity', '$desc', '$imgname')";

	$run = mysqli_query($conn, $qry);

	if($run == TRUE)
	{
		?>
			<script type="text/javascript">
				alert('Data Inserted Successfully');
			</script>
		<?php
		header('location:productupload.php');
	}
	else
	{
		?>
			<script type="text/javascript">
				alert('Data Not Inserted');
			</script>
		<?php
		header('location:productupload.php');
	}
}

?>