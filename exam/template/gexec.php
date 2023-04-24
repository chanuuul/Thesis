<?php
include('../../connect.php');
$name =$_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$contact =$_POST['contact'];
$email =$_POST['email'];
$type = 'admimissionadmin';
$result = mysql_query("SELECT * FROM login WHERE username = '$username' ");
$count=mysql_num_rows($result);
echo $count;
if($count>0) {
	echo '<script>alert("The username you are trying to register is already taken");window.location="admission.php"</script>';
} else{ 
	$save1=mysql_query("INSERT INTO login (username, password,type,name,contact,email) VALUES ('$username','$password','$type','$name','$contact','$email')");
	echo '<script>alert("Guidance Account has been added");window.location="guidance.php"</script>';
}
?>