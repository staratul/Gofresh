<?php
	include 'sidebar.php';
?>
<?php
	include 'maincontent.php';
?>

<!--<meta http-equiv="refresh" content="3">-->
	<div class="info">
			<p>This is user List Page</p>	
			<div class="user_list">
				<table border="1">
					<tr>
						<th>User Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>City</th>
					</tr>
					<tr>
						<?php
							include '../connection.php';
							$sql = "SELECT * FROM user WHERE id>'1'";
							$result = mysqli_query($conn, $sql);
							if(!$result)
							{
								echo "<script>alert('Data Not Found, Error:');</script>";
							}
							else
							{
								while($data = mysqli_fetch_assoc($result))
								{
									$id = $data['id'];
									$name = $data['name'];
									$email = $data['email'];
									$mobile = $data['mobile'];
									$address = $data['address'];
									$city = $data['city'];
									?>
										<tr>
											<td><?php echo $id; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php echo $city; ?></td>
										</tr>
									<?php
								}
							}
						?>
					</tr>
				</table>
			</div>

	</div>


<?php
	include 'footer.php';
?>


