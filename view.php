
<?php
include('./connect.php');
//include('./auth.php');

//$id=$_SESSION['SESS_MEMBER_ID'];
//$result = mysql_query("SELECT * FROM login WHERE id='$id'");
//while($row = mysql_fetch_array($result))
//	{
//		$username = $row['username'];
//	}
$stat =$_GET['id'];
$username =$_GET['username'];
echo $stat;
echo $username;
mysql_query("UPDATE login SET stat = '$stat' WHERE username = '$username'");
mysql_query("UPDATE login SET start = 'Start' WHERE username = '$username'");
?>