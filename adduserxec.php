<?php
			if(isset($_POST['submit'])){ 
			include('./connect.php');
			$uname = $_POST['username'];
			$sql = mysql_query("SELECT * FROM login WHERE username = '$uname'");
			$count=mysql_num_rows($sql);
if($count >0) {
echo '<script>alert("The username you are trying to registered is already in use");window.location="user.php"</script>';	
} else {
  $name = $_POST['name']; 
  $address = $_POST['address']; 
  $contact = $_POST['contact']; 
  $school= $_POST['school']; 
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $type = 'admission';
	$save1=mysql_query("INSERT INTO login (username,password, type,name,address,contact,school) VALUES ('$username','$password','$type','$name','$address','$contact','$school')");
  echo '<script>alert("User has been succcessfully registered");window.location="user.php"</script>';
}   
			}
			?>