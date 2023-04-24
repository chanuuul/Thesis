<?php 
include('../connect.php');

$question = $_POST['question'];
$ansa = $_POST['ansa'];
$ansb = $_POST['ansb'];
$ansc = $_POST['ansc'];
$ansd = $_POST['ansd'];
$corans = $_POST['corans'];
$questionid = $_POST['id11'];
$teacher = $_POST['teacher'];
		
		
$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
  $image = $_FILES["file"]["name"];
		
$save1=mysql_query("INSERT INTO questions (question,ansa,ansb,ansc,ansd,corans,questionid,teacher,image) VALUES ('".mysql_real_escape_string($question)."','".mysql_real_escape_string($ansa)."','".mysql_real_escape_string($ansb)."','".mysql_real_escape_string($ansc)."','".mysql_real_escape_string($ansd)."','$corans','$questionid','$teacher','$image')");



		 echo "<script type=\"text/javascript\">window.alert('Question item has been added.');window.location.href = 'additem.php';</script>"; 

?>