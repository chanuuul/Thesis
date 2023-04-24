<?php
include('../connect.php');

$uname =$_POST['uname'];
$username =$_POST['username'];
$password =$_POST['password'];
$type = 'examination';
$result = mysql_query("SELECT * FROM login WHERE username = '$username' ");
$count=mysql_num_rows($result);
echo $count;
if($count>0) {
	echo '<script>alert("The username you are trying to register is already taken");window.location="admission.php"</script>';
} else{ 


$result1 = mysql_query("SELECT * FROM admission WHERE username = '$uname' ");
while($row1 = mysql_fetch_array($result1))
								{
									$email = $row1['email'];
									
								}


	$save1=mysql_query("INSERT INTO login (username, password,type,uname) VALUES ('$username','$password','$type','$uname')");
//notif
$to = $email;
$subject = 'Sta Teresa College Admission Result';
$headers = 'From: Sta Teresa College';
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";							
$notification ='You examination account is username:'.$username.' and your password is '.$password.'';
$message ='Congratulations. You are qualified to take the Sta Teresa College Admission Test. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM.';
$type = 'Examination';
$date = date('Y-m-d');
$save2=mysql_query("INSERT INTO notification (notification,date,student,type) VALUES ('$notification','$date','$uname','$type')");
mail($to, $subject, $message, $headers);	

//end notif

	echo '<script>alert("Examination Account has been added");window.location="admission1.php"</script>';
}
?>