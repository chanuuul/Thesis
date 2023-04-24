<?php 
include('../connect.php');

$username = $_GET["id"];
$status = 'Approved';
$contact = $_GET['contact'];
  $result1aa = mysql_query("SELECT * FROM admission WHERE username = '$username' ");
								while($row1aa = mysql_fetch_array($result1aa))
								{
									$email = $row1aa['email'];
									
								}

//sms



//sms
//$str = substr($contact, 1);

//echo $contact;
//$twilio_account_sid = "ACd41c1e4a3162299c2f16b10777bf46e9";
//$twilio_auth_token = "6a3bb6cc4e048c257dd6f66ae4e4f0f4";
//$twilio_phone_number = "+15139958335";

//$payload = [
//    'From' => $twilio_phone_number,
//    'To' => '+63'.$str,
//    'Body' => 'Congratulations. You are qualified to take the Sta Teresa College Admission. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM'
//];

//$url = 'https://api.twilio.com/2010-04-01/Accounts/' . $twilio_account_sid . '/Messages.json';

//$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_USERPWD, $twilio_account_sid . ':' . $twilio_auth_token);
//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));

//$response = curl_exec($ch);
//$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//curl_close ($ch);

//var_dump( $status );
//var_dump( $response );


//end sms

	$type = 'Exam';
mysql_query("UPDATE admission SET status='Approved'  WHERE username =  '$username'");
mysql_query("UPDATE filling SET status='Approved'  WHERE username =  '$username'");
$type = 'Admission';
//mysql_query("UPDATE login SET type='$type'  WHERE username =  '$username'");

$to = $email;
$subject = 'Sta Teresa College Admission Result';
$headers = 'From: Sta Teresa College';
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";							
$notification ='Congratulations. You are qualified to take the Sta Teresa College Admission. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM';
$message ='Congratulations. You are qualified to take the Sta Teresa College Admission Test. Please bring this test permit, black pen and pencils with eraser on the scheduled date of your exam. NO TEST PERMIT, NO EXAM.';

$date = date('Y-m-d');
$save2=mysql_query("INSERT INTO notification (notification,date,student,type) VALUES ('$notification','$date','$username','$type')");
mail($to, $subject, $message, $headers);	

 echo "<script type=\"text/javascript\">alert('Admission has been approved');window.location.href = 'admission.php';</script>"; 

?>