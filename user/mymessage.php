<?php
	include 'user_header.php';
?>

<?php
	include 'main_content.php';
?>

<?php
	include '../connection.php';
?>

	<div>
		<p>This is My Message Page</p>
	<table class="message_table">
		<tr>
			<th>My Message</th>
		</tr>
		<?php
			$sql = "SELECT * FROM message WHERE userid='$id'";
			$run = mysqli_query($conn, $sql);
			if($row = mysqli_num_rows($run)>0)
			{
				while($data = mysqli_fetch_assoc($run))
				{
					?>
						<tr><td><?php echo $data['message']; ?></td></tr>
					<?php
				}
			}
		?>
	</table>
<table class="reply_table">
		<tr>
			<th>Admin Replay</th>
		</tr>
		<?php
			$sql = "SELECT * FROM reply WHERE userid='$id'";
			$run = mysqli_query($conn, $sql);
			if($row = mysqli_num_rows($run)>0)
			{
				while($data = mysqli_fetch_assoc($run))
				{
					?>
						<tr><td><?php echo $data['message']; ?></td></tr>
					<?php
				}
			}
		?>
</table>
</div>



<?php
	include 'footer.php';
?>