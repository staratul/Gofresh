<?php
include 'connection.php';
error_reporting(0);
$id = $_REQUEST['cid'];
session_start();
$uid = $_SESSION['id'];

$sql = "DELETE FROM cart WHERE id='$id'";

$run = mysqli_query($conn,$sql);

if($run == TRUE)
{
	?>
		<script type="text/javascript">
			alert('Data Deleted Successfully.');
			window.open('show_add_cart.php','_self');
		</script>
	<?php
}
else
{
	?>
		<script type="text/javascript">
			alert('Data Not Deleted.');
		</script>
	<?php
	window.open('show_add_cart.php','_self');
}

?>