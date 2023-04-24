<?php
include('../../connect.php');
$username =$_GET['username'];
//$email = $_GET['email'];
$number = rand(100000, 999999);
$email = 'exam-'.$number;
?>

<form action="aexec.php" method="POST"  enctype="multipart/form-data">
<div class="az-content-label mg-b-5">Fill up all fields to create an examination account</div>
<hr width="500px">
<input type="hidden" name="uname" value="<?php echo $username ?>">
          
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Username</p>
              <input class="form-control" required placeholder="Username" type="text" name="username" value="<?php echo $email ?>">
            </div><!-- col -->
          </div>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Password</p>
              <input class="form-control" required placeholder="Password" type="text" name="password" value="stc@2023">
            </div><!-- col -->
          </div>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Confirm Password</p>
              <input class="form-control" required placeholder="Confirm Password" type="text" name="cpassword" value="stc@2023">
            </div><!-- col -->
          </div>
		  <!-- end row -->
		  <br>
		  <input type="submit" name="submit" value="Add Examination Account" class="btn btn-primary">
		  </form>
