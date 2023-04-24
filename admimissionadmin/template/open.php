<?php
include('../connect.php');
$id = $_GET['id'];
mysql_query("DELETE FROM results1 WHERE student = '$id' AND score = 'No Face Detected'");
?>
<script>
alert("Quiz has been reopened");
window.location = 'exam.php';
</script>