<style>
	.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background-color:#3d94f6;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #337fed;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #1570cd;
	
}
</style>
<?php
$id = $_GET['id'];
include('../../connect.php');
		$result = mysql_query("SELECT * FROM quiz WHERE id = '$id'");
		while($row = mysql_fetch_array($result))
		{
$name = $row['name'];
$datestart = $row['datestart'];
$dateend = $row['dateend'];

		}

?>
<h4>Reopen Quiz</h3>
<hr>
<form action="reopenexec.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>">
	<table width="350px">
		<tr>
			<td>Quiz Title:</td>
			<td>&nbsp;&nbsp;</td>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp;&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td>Start Date:</td>
			<td>&nbsp;&nbsp;</td>
			<td><input type="date" name="start" required></td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp;&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td>End Date:</td>
			<td>&nbsp;&nbsp;</td>
			<td><input type="date" name="end" required></td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp;&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit" class="myButton"></td>
		</tr>
	
	</table>


</form>