<?php 
include('../../connect.php');

$question = $_POST['question'];
$ansa = $_POST['ansa'];
$ansb = $_POST['ansb'];
$ansc = $_POST['ansc'];
$ansd = $_POST['ansd'];
$corans = $_POST['corans'];
$questionid = $_POST['id11'];
$teacher = $_POST['teacher'];
		
$save1=mysql_query("INSERT INTO questions (question,ansa,ansb,ansc,ansd,corans,questionid,teacher) VALUES ('$question','$ansa','$ansb','$ansc','$ansd','$corans','$questionid','$teacher')");



		 echo "<script type=\"text/javascript\">window.alert('Question item has been added.');window.location.href = 'additem.php';</script>"; 

?>