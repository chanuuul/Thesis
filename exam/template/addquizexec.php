<?php 
include('../../connect.php');
date_default_timezone_set("Asia/Taipei");
$name = $_POST['name'];
$minutes = $_POST['minutes'];
$description = $_POST['description'];
$date = date('D, M j, Y \a\t g:ia');
$teacher = $_POST['teacher'];
$datestart = $_POST['datestart'];
$dateend = $_POST['dateend'];
$subject = $_POST['subject'];

$save2=mysql_query("INSERT INTO quiz (name,description,date,teacher,datestart,dateend,subject,minutes) VALUES ('$name','".mysql_real_escape_string($description)."','$date','$teacher','$datestart','$dateend','$subject','$minutes')");
echo "<script type=\"text/javascript\">window.alert('Quiz has been added. Press OK to add items to quiz');window.location.href = 'additem.php';</script>"; 

		 

?>