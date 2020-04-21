<?php
	include 'sidebar.php';
	error_reporting(0);
?>
<?php
	include 'maincontent.php';
?>
<?php
	include '../connection.php';
	$mid = $_GET['mid'];

	session_start();
	$_SESSION['msgid'] = $mid;

	$sql = "SELECT * FROM message where id='$mid'";
	$run = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($run);
?>

	<div class="info">
		<p>This is user Message Reply Page</p>
		<div class="reply">
			<form action="reply.php" method="post">
				<div class="text_field">
					<label>User Id</label>
					<input type="text" class="form-control" name="userid" required=""
					 value="<?php echo $data['userid']; ?>">
				</div>
				<div class="text_field">
					<label>Reply Message</label>
					<textarea rows="3" name="message" class="form-control" required=""></textarea>
				</div>
				<div class="reply_btn">
					<input type="submit" class="btn btn-primary" name="submit">
				</div>
			</form>
		</div>
	</div>	


<?php
include '../connection.php';
if(isset($_POST['submit']))
{	
	$userid = $_POST['userid'];
	$message = $_POST['message'];
	$qry = "INSERT INTO reply (userid,message) VALUES ('$userid', '$message')";
	$result = mysqli_query($conn, $qry);
	if($result)
	{
		?>
			<script type="text/javascript">
				alert('Reply Send Successfully');
			</script>
		<?php
		header('location:reply.php');
	}
	else
	{
		?>
			<script type="text/javascript">
				alert('Reply Not Send');
			</script>
		<?php
	}
}

?>





<?php
	include 'footer.php';
?>


