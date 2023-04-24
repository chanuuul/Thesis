<?php
include('../../connect.php');
$id = $_GET['id'];
mysql_query("UPDATE notification SET status = 'Confirmed' WHERE id = '$id'");
?>
<script>
alert("Admission has been confirmed");
window.location='admission.php';
</script>