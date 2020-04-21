<?php
include '../connection.php';
$id = $_REQUEST['pid'];
$qry = "DELETE FROM product WHERE id='$id'";

$run = mysqli_query($conn, $qry);

if($run == TRUE)
{
	?>
		<script type="text/javascript">
			alert('Data Deleted Successfully.');
			window.open('productdelete.php','_self');
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
}
?>