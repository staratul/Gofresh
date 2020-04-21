<?php

include '../connection.php';
	$name = $_POST['name'];
	$category = $_POST['select_cat'];
	$price = $_POST['price'];
	$quantity = $_POST['select_quantity'];
	$desc = $_POST['desc'];
	$id = $_POST['pid'];
	$imgname = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];

	move_uploaded_file($tempname, "upload/$imgname");

	$qry = "UPDATE product SET name='$name', category='$category', price='$price', 
			quantity='$quantity', description='$desc', image='$imgname' WHERE id='$id'";
	$run = mysqli_query($conn, $qry);
	if($run == TRUE)
	{
		?>
			<script type="text/javascript">
				alert('Data Updated Successfully.');
				window.open('productupdate.php?sid=<?php echo $id; ?>','_self');
			</script>
		<?php
	}
	else
	{
		?>
			<script type="text/javascript">
				alert('Data Not Updated.');
			</script>
		<?php
	}
