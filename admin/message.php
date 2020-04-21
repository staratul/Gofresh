<?php
	include 'sidebar.php';
?>
<?php
	include 'maincontent.php';
?>

<!--?php
	include '../connection.php';
	$qry = "SELECT * FROM reply";
	$run = mysqli_query($conn, $qry);
	$replydata = mysqli_fetch_assoc($run);

	session_start();
	$_SESSION['ruid'] = $replydata['userid'];
?-->


	<div class="info">
			<p>This is user Message Page</p>	
			<div class="user_message">
					<table>
						<tr>
							<th>S No.</th>
							<th>User Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Message</th>
							<th>Reply</th>
						</tr>


<?php

	include '../connection.php';
	error_reporting(0);

		$sql = "SELECT * FROM message";
		$run = mysqli_query($conn, $sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='7'>No Record found</td></tr>";
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
					<td><?php echo $data['userid']; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['message']; ?></td>
					<td>
						<a href="reply.php?mid=<?php echo $data['id']; ?>">
						Reply</a>
					</td>
				</tr>
				<?php
		}
	}

?>


			</table>
		</form>
	</div>
</div>


<?php
	include 'footer.php';
?>


