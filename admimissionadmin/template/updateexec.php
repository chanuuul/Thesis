<?php
error_reporting(0);
ini_set('display_errors', 0);
include('../connect.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$bplace = $_POST['bplace'];
$citizen = $_POST['citizen'];
$civil = $_POST['civil'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$telnum = $_POST['telnum'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$foccupation = $_POST['foccupation'];
$freligion = $_POST['freligion'];
$fcontact = $_POST['fcontact'];
$mname = $_POST['mname'];
$moccupation = $_POST['moccupation'];
$mreligion = $_POST['mreligion'];
$mcontact = $_POST['mcontact'];
$gname = $_POST['gname'];
$goccupation = $_POST['goccupation'];
$greligion = $_POST['greligion'];
$gcontact = $_POST['gcontact'];
$sname = $_POST['sname'];
$soccupation = $_POST['soccupation'];
$sreligion = $_POST['sreligion'];
$scontact = $_POST['scontact'];
$school = $_POST['school'];
$graduated = $_POST['graduated'];
$saddress = $_POST['saddress'];
$reason = $_POST['reason'];
$contact = $_POST['contact'];

$id = $_POST['id'];

//upload file
//echo $_FILES["file1"]["name"].'sa';
if (!file_exists($_FILES['file1']['tmp_name']) || !is_uploaded_file($_FILES['file1']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);
	move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
	$file1 = $_FILES["file1"]["name"];
	$sql = mysql_query("UPDATE admission SET file1 = '$file1' WHERE id = '$id'");
}
if (!file_exists($_FILES['file2']['tmp_name']) || !is_uploaded_file($_FILES['file2']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file2"]["name"]);
	move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file1);
	$file2 = $_FILES["file2"]["name"];
	$sql = mysql_query("UPDATE admission SET file2 = '$file2' WHERE id = '$id'");
}
if (!file_exists($_FILES['file3']['tmp_name']) || !is_uploaded_file($_FILES['file3']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file3"]["name"]);
	move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file1);
	$file3 = $_FILES["file3"]["name"];
	$sql = mysql_query("UPDATE admission SET file3 = '$file3' WHERE id = '$id'");
}
if (!file_exists($_FILES['file4']['tmp_name']) || !is_uploaded_file($_FILES['file4']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file4"]["name"]);
	move_uploaded_file($_FILES["file4"]["tmp_name"], $target_file1);
	$file4 = $_FILES["file4"]["name"];
	$sql = mysql_query("UPDATE admission SET file4 = '$file4' WHERE id = '$id'");
}
if (!file_exists($_FILES['file5']['tmp_name']) || !is_uploaded_file($_FILES['file5']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);
	move_uploaded_file($_FILES["file5"]["tmp_name"], $target_file1);
	$file5 = $_FILES["file5"]["name"];
	$sql = mysql_query("UPDATE admission SET file5 = '$file5' WHERE id = '$id'");
}
if (!file_exists($_FILES['file1']['tmp_name']) || !is_uploaded_file($_FILES['file1']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file6"]["name"]);
	move_uploaded_file($_FILES["file6"]["tmp_name"], $target_file1);
	$file6 = $_FILES["file6"]["name"];
	$sql = mysql_query("UPDATE admission SET file6 = '$file6' WHERE id = '$id'");
}
if (!file_exists($_FILES['file7']['tmp_name']) || !is_uploaded_file($_FILES['file7']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file7"]["name"]);
	move_uploaded_file($_FILES["file7"]["tmp_name"], $target_file1);
	$file7 = $_FILES["file7"]["name"];
	$sql = mysql_query("UPDATE admission SET file7 = '$file7' WHERE id = '$id'");
}
if (!file_exists($_FILES['file8']['tmp_name']) || !is_uploaded_file($_FILES['file8']['tmp_name'])) 
{
	
} else {
	$target_dir1 = "../../uploads/";
	$target_file1 = $target_dir1 . basename($_FILES["file8"]["name"]);
	move_uploaded_file($_FILES["file8"]["tmp_name"], $target_file1);
	$file8 = $_FILES["file8"]["name"];
	$sql = mysql_query("UPDATE admission SET file8 = '$file8' WHERE id = '$id'");
}

$sql = mysql_query("UPDATE admission SET firstname = '$firstname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET lastname = '$lastname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET middlename = '$middlename' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET age = '$age' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET gender = '$gender' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET bday = '$bday' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET bplace = '$bplace' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET citizen = '$citizen' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET civil = '$civil' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET religion = '$religion' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET address = '$address' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET telnum = '$telnum' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET email = '$email' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET fname = '$fname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET foccupation = '$foccupation' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET freligion = '$freligion' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET fcontact = '$fcontact' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET mname = '$mname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET moccupation = '$moccupation' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET mreligion = '$mreligion' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET mcontact = '$mcontact' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET gname = '$gname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET greligion = '$greligion' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET goccupation = '$goccupation' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET gcontact = '$gcontact' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET sname = '$sname' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET soccupation = '$soccupation' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET sreligion = '$sreligion' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET scontact = '$scontact' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET school = '$school' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET graduated = '$graduated' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET saddress = '$saddress' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET reason = '$reason' WHERE id = '$id'");
$sql = mysql_query("UPDATE admission SET contact = '$contact' WHERE id = '$id'");

?>
<script>
alert("Admission information has been updated");
window.location='view.php?id=<?php echo $id ?>';
</script>