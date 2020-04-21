<?php
include 'header.php';
?>

<?php
	include 'connection.php';
	$sql = "SELECT * FROM review";
	$run = mysqli_query($conn, $sql);
?>
<div class="review">
<div class="container" id="review_page">
	<div class="row">
		<div class="col-sm-12">
			<table class="review_table">
				<tr>
					<th>User Name</th>
					<th>Review</th>
				</tr>
				<tr>
				<?php
					if($row = mysqli_num_rows($run))
					{
						while($data = mysqli_fetch_assoc($run))
						{
							?>
							<tr>
								<td><?php echo $data['username']; ?></td>
								<td><?php echo $data['review']; ?></td>
							</tr>
							<?php
						}
					}
				?>
				</tr>	
			</table>
		</div>	
	</div>
</div>
</div>
<?php
	include 'footer.php';
?>