<?php
	include 'sidebar.php';
?>
<?php
	include 'maincontent.php';
?>

<?php
include '../connection.php';
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);
?>


	<div class="info">
			<p>This is Product Upload Page</p>	
			<div class="product_upload">
				<form action="product_upload_code.php" method="post" enctype="multipart/form-data">
					<div>
						<label>Name:</label>
						<input type="text" class="form-control" name="name" required="">
					</div>
					<div>
						<label class="sc">Select Category:</label>
						<select required="" class="form-control" name="select_cat">
							<option>Select Category</option>
							<?php
								while($row = mysqli_fetch_assoc($result))
								{
									echo "<option>".$row['catname']."</option>";
								}
							?>
						</select>
					</div>
					<div>
						<label>Price:</label>
						<input type="text" name="price" class="form-control" required="">
					</div>
					<div>
						<label>Select Quantity:</label>
						<select required="" class="form-control" name="select_quantity">
							<option>Select Quantity</option>
							<option>KG</option>
							<option>pound</option>
							<option>Single</option>
							<option>Dozen</option>
						</select>
					</div>
					<div>
						<label>Description:</label>
						<textarea rows="3" required="" class="form-control" name="desc"></textarea>
					</div>
					<div class="file_upload_file">
						<label>Choose Images:</label>
						<input type="file" name="image" required="">
					</div>
					<div class="file_upload_btn"> 
						<input type="submit" class="btn btn-outline-primary" name="submit" value="Upload">
					</div>
				</form>
			</div>
	</div>


<?php
	include 'footer.php';
?>


