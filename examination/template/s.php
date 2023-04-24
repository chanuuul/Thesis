
<?php  
include('../auth.php');
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$a = 0;
$ca  = 0;
//$c = 0
$result = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		$username = $row['username'];
		$uname =$row['uname'];
		$stat = $row['stat'];
		$chance =$row['chance'];
		$start = $row['start'];
	}
$s = explode(" ",$stat);
$c=  $s[0];
echo '<script>';
echo 'if(document.getElementById("startq").value == "Start") ';
echo '{';
//echo 'startquiz();';
echo '} else {';

echo 'document.getElementById("startq").value = "'.$start.'";';
if($start == '') {
	
} else {
	echo 'startquiz();';
	echo 'document.getElementById("ten-countdown").style.display="block";';
	echo 'document.getElementById("quizcontent").style.display="block";';
	echo 'document.getElementById("waitcontent").style.display="none";';
	//echo '<script>startquiz();</script>';
}
echo '}';
echo '</script>';
//echo '<input type="text" value="'.$c.'"><br>';
//echo '<script>console.log("'.$c.'")</script>';
if($c == '') {
	//echo 'a';
} else {
	//echo 'b';
	}
	if($start != '') {
if($c == $username OR $c == $uname) {
	///echo $c;
	
} else {
	if($chance <= 0) {
		
	} else {
	echo '<h3>Please stay close and stay focus on the exam.</h2>';
	$ca = $chance - 1;
	mysql_query("UPDATE login SET chance = '$ca' WHERE username = '$username'");
	    sleep(1);
	}

}
if($chance <= 0) {
	$id = $_SESSION['exam'];
	//echo 'dne';
	
	
echo "<script>console.log('cam');window.location='face.php?id=".$id."';	  </script>";


} else {
echo 'Number of Chances:<input type="text" id="cs" value="'.$chance.'" style="border:0">';	
}
	}
//echo 'Number of Chances:<input type="text" id="cs" value="'.$chance.'" style="border:0">';	
?>
