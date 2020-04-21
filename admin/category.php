<?php
	include 'sidebar.php';
?>
<?php
	include 'maincontent.php';
?>


	<div class="info">
			<p>This is Add Category Page</p>	
			<div class="add_category">
				<form action="" method="post">
					<div class="cat_text">
						<input type="text" name="category">
					</div>
					<div class="cat_btn">
						<input type="submit" name="submit" value="Add">
					</div>
				</form>
			</div>
	</div>


<?php
	include 'footer.php';
?>


<?php

include '../connection.php';
error_reporting(0);
if(isset($_POST['submit']))
{
	$cat = $_POST['category'];
	echo $cat;
	$sql = "INSERT INTO category (catname) VALUES ('$cat')";
	print_r($sql);
	$result = mysqli_query($conn, $sql);
	print_r($result);
	if($result)
	{
		echo "<script>alert('Category Added Successfully');</script>";
		header('location:category.php');
	}
	else
	{
		echo "<script>alert('Category Not Added, Error');</script>";
	}
}

?>


