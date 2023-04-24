<?php
include('../connect.php');
$id = $_GET['id'];
$reason = $_GET['reason'];
$sql = mysql_query("UPDATE admission SET status = 'Declined' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET reason1 = '$reason' WHERE id = '$id'");



  $result1aa = mysql_query("SELECT * FROM admission WHERE id = '$id' ");
								while($row1aa = mysql_fetch_array($result1aa))
								{
									$email = $row1aa['email'];
									$username =$row1aa['username'];
									
								}

	$type = 'Exam';

//mysql_query("UPDATE login SET type='$type'  WHERE username =  '$username'");

$to = $email;
$subject = 'Sta Teresa College Admission Result';
$headers = 'From: Sta Teresa College';
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";							
$notification ='Your application request for Sta Teresa College admission has been declined. Reason:'.$reason;
$message ='Your application request for Sta Teresa College admission has been declined. Reason:'.$reason;

$date = date('Y-m-d');
$save2=mysql_query("INSERT INTO notification (notification,date,student) VALUES ('$notification','$date','$username')");
mail($to, $subject, $message, $headers);	


?>
<script>
alert("Admission request has been declined");
window.location='admission.php';
</script>