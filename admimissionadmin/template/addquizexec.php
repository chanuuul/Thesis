<?php 
include('../connect.php');
date_default_timezone_set("Asia/Taipei");
$name = $_POST['name'];
$minutes = $_POST['minutes'];
$description = $_POST['description'];
$date = date('D, M j, Y \a\t g:ia');
$teacher = $_POST['teacher'];
$datestart = $_POST['datestart'];
$dateend = $_POST['dateend'];
$subject = $_POST['subject'];
//sms


//$str = substr($contact, 1);

//echo $contact;
//$twilio_account_sid = "ACd41c1e4a3162299c2f16b10777bf46e9";
//$twilio_auth_token = "6a3bb6cc4e048c257dd6f66ae4e4f0f4";
//$twilio_phone_number = "+15139958335";

//$payload = [
//    'From' => $twilio_phone_number,
//    'To' => '+63'.$str,
//    'Body' => 'Good day! This is stcadmission.tech recovery password. Your verification code is: '.$num.'' //message sms
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

//end sms
$save2=mysql_query("INSERT INTO quiz (name,description,date,teacher,datestart,dateend,subject,minutes) VALUES ('$name','".mysql_real_escape_string($description)."','$date','$teacher','$datestart','$dateend','$subject','$minutes')");
echo "<script type=\"text/javascript\">window.alert('Quiz has been added. Press OK to add items to quiz');window.location.href = 'additem.php';</script>"; 

		 

?>