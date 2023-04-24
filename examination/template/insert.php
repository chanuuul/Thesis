<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
	}
	
?>

<?php 
include('../connect.php');

$username = $username;
$quiz = $_POST['quiz'];
$number = $_POST['number'];
$score = $_POST['score'];
$save1=mysql_query("INSERT INTO results1 (number,student,quiz,score) VALUES ('$number','$username','$quiz','$score')");



		 echo "<script type=\"text/javascript\">window.alert('Score has been saved.');window.location.href = 'index.php';</script>"; 

?>