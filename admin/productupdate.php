<?php
	include 'sidebar.php';
?>
<?php
	include 'maincontent.php';
?>


	<div class="info">
			<p>This is Product Update Page</p>
			<div class="product_update">
				<h4>Search Product That You Want To Updated</h4>
				<form action="productupdate.php" method="post" class="update_search">
					<label>Product Category</label>
					<input type="text" name="cat_delete" required="">
					<label>Product Name</label>
					<input type="text" name="pro_name" required="">
					<div class="search_btn">
						<input type="submit" class="btn btn-primary" name="submit" value="Search">
					</div>
				</form>
			</div>
			<div class="tbl_data">
				<table class="delete_table">
					<tr>
						<th>S No</th>
						<th>Image</th>
						<th>Name</th>
						<th>Category</th>
						<th>Price</th>
						<th>Edit</th>
					</tr>

<?php

	include '../connection.php';
	if(isset($_POST['submit']))
	{
		$cat_delete = $_POST['cat_delete'];
		$pro_name = $_POST['pro_name'];
		$sql = "SELECT * FROM product WHERE category='$cat_delete' ANd name LIKE '%$pro_name%'";
		$run = mysqli_query($conn, $sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='6'>No Record found</td></tr>";
		}
		else
		{
			$count = 0;
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr>
					<td><?php echo $count; ?></td>
					<td>
						<img src="upload/<?php echo $data['image']; ?>" style="max-width: 100%;">
					</td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['category']; ?></td>
					<td><?php echo $data['price']; ?></td>
					<td>
						<a href="update_form.php?pid=<?php echo $data['id']; ?>">
							Edit</a>
					</td>
				</tr>
				<?php
			}
		}
	}

?>


		</table>
	</div>	
</div>


<?php
	include 'footer.php';
?>


