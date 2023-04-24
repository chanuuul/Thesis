<h4>Reason to decline:</h4>
<hr style="width:400px">
<form action="delete2.php">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<textarea class="form-control" style="height:200px" name="reason"></textarea>
<input type="submit" value="Decline Admission Request" class="btn btn-danger">
</form>