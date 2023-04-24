<?php
include('../../connect.php');
$id = $_GET['id'];
$sql = mysql_query("DELETE FROM login WHERE id = '$id'");
?>
<script>
alert("Record has been deleted");
window.location='guidance.php';
</script>