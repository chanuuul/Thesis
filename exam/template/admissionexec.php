<?php  
include('../auth.php');
include('../../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		$username = $row['username'];
	}
	
$result2 = mysql_query("SELECT * FROM login WHERE username='$username'");
while($row2 = mysql_fetch_array($result2))
	{
		$name = $row2["name"];
		$school = $row2["school"];
		
	}
	include('../../connect.php');


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
$status = 'Pending';

$save1=mysql_query("INSERT INTO admission (username, status,firstname,lastname,middlename,age,gender,bday,bplace,citizen,civil,religion,address,telnum,email,fname,foccupation, freligion,fcontact,mname,moccupation,mreligion,mcontact,gname,goccupation,greligion,gcontact,sname,soccupation,sreligion,scontact,school,graduated,saddress,reason
) VALUES ('$username','$status','$firstname','$lastname','$middlename','$age','$gender','$bday','$bplace','$citizen','$civil','$religion','$address','$telnum','$email','$fname','$foccupation','$freligion','$fcontact','$mname','$moccupation','$mreligion','$mcontact','$gname','$goccupation','$greligion','$gcontact','$sname','$soccupation','$sreligion','$scontact','$school','$graduated','$saddress','$reason')");
?>
<script>
alert("Admission request has been sent. Please wait for a notification for the status of your request");
window.location='index.php';
</script>