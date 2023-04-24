<input type="hidden" id="val1" >
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
	
$result2a = mysql_query("SELECT * FROM logs WHERE username = '$username'");
$a = 0;
while($row2a = mysql_fetch_array($result2a))
	{
		$logs = $row2a['logs'];
		echo $row2a['logs'];
		if($logs != '') {
			$a +=1;
		echo '<script>
		
			document.getElementById("val1").value = '.$a.';
		</script>';
	} else {
		echo '<script>
		var val = document.getElementById("val1").value;
			document.getElementById("val1").value = 0;
		</script>';
	}
	}
	
	?>
