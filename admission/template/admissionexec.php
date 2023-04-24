<?php  
include('../auth.php');
include('../connect.php');
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
$status = 'Pending';



//upload file
//echo $_FILES["file1"]["name"].'sa';
$target_dir1 = "../../uploads/";
$target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);
move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);

$target_dir2 = "../../uploads/";
$target_file2 = $target_dir2 . basename($_FILES["file2"]["name"]);
move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file2);

$target_dir3 = "../../uploads/";
$target_file3 = $target_dir3 . basename($_FILES["file3"]["name"]);
move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file3);

$target_dir4 = "../../uploads/";
$target_file4 = $target_dir4 . basename($_FILES["file4"]["name"]);
move_uploaded_file($_FILES["file4"]["tmp_name"], $target_file4);

$target_dir5 = "../../uploads/";
$target_file5 = $target_dir5 . basename($_FILES["file5"]["name"]);
move_uploaded_file($_FILES["file5"]["tmp_name"], $target_file5);

$target_dir6 = "../../uploads/";
$target_file6 = $target_dir6 . basename($_FILES["file6"]["name"]);
move_uploaded_file($_FILES["file6"]["tmp_name"], $target_file6);

$target_dir7 = "../../uploads/";
$target_file7 = $target_dir7 . basename($_FILES["file7"]["name"]);
move_uploaded_file($_FILES["file7"]["tmp_name"], $target_file7);

$target_dir8 = "../../uploads/";
$target_file8 = $target_dir2 . basename($_FILES["file8"]["name"]);
move_uploaded_file($_FILES["file8"]["tmp_name"], $target_file8);


$file1 = $_FILES["file1"]["name"];
$file2 = $_FILES["file2"]["name"];
$file3 = $_FILES["file3"]["name"];
$file4 = $_FILES["file4"]["name"];
$file5 = $_FILES["file5"]["name"];
$file6 = $_FILES["file6"]["name"];
$file7 = $_FILES["file7"]["name"];
$file8 = $_FILES["file8"]["name"];

$save1=mysql_query("INSERT INTO admission (username, status,firstname,lastname,middlename,age,gender,bday,bplace,citizen,civil,religion,address,telnum,email,fname,foccupation, freligion,fcontact,mname,moccupation,mreligion,mcontact,gname,goccupation,greligion,gcontact,sname,soccupation,sreligion,scontact,school,graduated,saddress,reason,contact,file1,file2,file3,file4,file5,file6,file7,file8
) VALUES ('$username','$status','$firstname','$lastname','$middlename','$age','$gender','$bday','$bplace','$citizen','$civil','$religion','$address','$telnum','$email','$fname','$foccupation','$freligion','$fcontact','$mname','$moccupation','$mreligion','$mcontact','$gname','$goccupation','$greligion','$gcontact','$sname','$soccupation','$sreligion','$scontact','$school','$graduated','$saddress','$reason','$contact','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8')");

//courses

$course  = $_POST['course'];
$a = 0;
   foreach ($course as $value) {
	   $a +=1;
             $save1=mysql_query("INSERT INTO courses (username, course,type) VALUES ('$username','$value','$a')");

        }


?>
<script>
alert("Admission request has been sent. Please wait for a notification for the status of your request");
window.location='admission.php';
</script>