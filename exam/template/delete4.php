<?php 
include('../connect.php');
$id = $_GET['id'];
 $sql1 = "delete from login where username='$id'";
 mysql_query( $sql1);

	echo "<script type=\"text/javascript\">window.alert('Record has been deleted.');window.location.href = 'user.php';</script>"; 		


?>

