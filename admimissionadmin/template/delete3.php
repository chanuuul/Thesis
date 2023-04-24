<?php 
include('../connect.php');
$id = $_GET['id'];
 $sql1 = "delete from quiz where id='$id'";
 mysql_query( $sql1);

	echo "<script type=\"text/javascript\">window.alert('Quiz has been deleted.');window.location.href = 'exam.php';</script>"; 		


?>

