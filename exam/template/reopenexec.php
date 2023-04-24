<?php
include('../../connect.php');
$id = $_POST['id'];
$start = $_POST['start'];
$end = $_POST['end'];
mysql_query("UPDATE quiz SET datestart='$start' WHERE id='$id'");
mysql_query("UPDATE quiz SET dateend='$end' WHERE id='$id'");

echo '<script>alert("Quiz has been reopened");window.location="quiz.php"</script>';
?>