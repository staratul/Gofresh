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

$id = $_GET['pid'];

$qry = "SELECT * FROM product WHERE id='$id'";
$run = mysqli_query($conn, $qry);
$data = mysqli_fetch_assoc($run);
?>


	<div class="info">
			<p>This is Product Update Page</p>	
			<div class="product_upload">
				<form action="update_data.php" method="post" enctype="multipart/form-data">
					<div>
						<label>Name:</label>
						<input type="text" class="form-control" name="name" required="" value="<?php echo $data['name']; ?>">
					</div>
					<div>
						<label class="sc">Select Category:</label>
						<select required="" class="form-control" name="select_cat">
							<option value="<?php echo $data['category']; ?>"><?php echo $data['category']; ?></option>
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
						<input type="text" name="price" class="form-control" required=""value="<?php echo $data['price']; ?>">
					</div>
					<div>
						<label>Select Quantity:</label>
						<select required="" class="form-control" name="select_quantity">
							<option value="<?php echo $data['quantity']; ?>"><?php echo $data['quantity']; ?></option>
							<option>KG</option>
							<option>pound</option>
							<option>Dozen</option>
						</select>
					</div>
					<div>
						<label>Description:</label>
						<textarea rows="3" required="" class="form-control" name="desc" value="<?php echo $data['description']; ?>">
							<?php echo $data['description']; ?>
						</textarea>
					</div>
					<div class="file_upload_file">
						<label>Choose Images:</label>
						<input type="file" name="image" required="">
					</div>
					<div class="file_upload_btn"> 
						<input type="hidden" name="pid" value="<?php echo $data['id']; ?>">
						<input type="submit" class="btn btn-outline-primary" name="submit" value="Upload">
					</div>
				</form>
			</div>
	</div>


<?php
	include 'footer.php';
?>


