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
	
	$id =$_GET['id'];
$result2a = mysql_query("SELECT * FROM admission WHERE id='$id'");
while($row2a = mysql_fetch_array($result2a))
	{
		
$firstname = $row2a['firstname'];
$lastname = $row2a['lastname'];
$middlename = $row2a['middlename'];
$age = $row2a['age'];
$gender = $row2a['gender'];
$bday = $row2a['bday'];
$bplace = $row2a['bplace'];
$citizen = $row2a['citizen'];
$civil = $row2a['civil'];
$religion = $row2a['religion'];
$address = $row2a['address'];
$contact = $row2a['contact'];
$telnum = $row2a['telnum'];
$email = $row2a['email'];
$fname = $row2a['fname'];
$foccupation = $row2a['foccupation'];
$freligion = $row2a['freligion'];
$fcontact = $row2a['fcontact'];
$mname = $row2a['mname'];
$moccupation = $row2a['moccupation'];
$mreligion = $row2a['mreligion'];
$mcontact = $row2a['mcontact'];
$gname = $row2a['gname'];
$goccupation = $row2a['goccupation'];
$greligion = $row2a['greligion'];
$gcontact = $row2a['gcontact'];
$sname = $row2a['sname'];
$soccupation = $row2a['soccupation'];
$sreligion = $row2a['sreligion'];
$scontact = $row2a['scontact'];
$school = $row2a['school'];
$graduated = $row2a['graduated'];
$saddress = $row2a['saddress'];
$reason = $row2a['reason'];
$file1 = $row2a['file1'];
$file2 = $row2a['file2'];
$file3 = $row2a['file3'];
$file4 = $row2a['file4'];
$file5 = $row2a['file5'];
$file6 = $row2a['file6'];
$file7 = $row2a['file7'];
$file8 = $row2a['file8'];

		$uname =$row2a['username'];
	}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Sta Teresa College</title>

            
			<style>
			div[style=""] {
    position: relative;
    display: inline-block;
}

.notification-on{
    position: absolute;
    top: -5px;
    right: -5px;
	left:95px;
    text-align: center;
    color: white;
    border-radius: 10px;
    background-color: red;
    width: 20px;
    font-weight: bold;

}
			</style>
    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo" style="color:green;text-transform:uppercase"><span></span> Sta Teresa College</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            
            <li class="nav-item">
              <a href="admission.php" class="nav-link" style=''><i class="typcn typcn-chart-area-outline"></i> Applicants
					<?php
			include('../connect.php');
			$result2c = mysql_query("SELECT * FROM admission WHERE status='Pending'");
			$countc=mysql_num_rows($result2c);
			if($countc>0) {
				echo '	&nbsp;<div class="notification-on">'.$countc.'</div>';
			}
			?></a>
            </li>
            <li class="nav-item">
              <a href="admission1.php" class="nav-link"><i class="typcn typcn-user"></i> Admission</a>
            </li>
            <li class="nav-item">
              <a href="user.php" class="nav-link"><i class="typcn typcn-adjust-contrast"></i> User List</a>
            </li>
            <li class="nav-item">
              <a href="exam.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Examination</a>
            </li>
           
           
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          
          <div class="dropdown az-header-notification">
		  
<?php
			include('../connect.php');
			$result2 = mysql_query("SELECT * FROM notification WHERE student='$username' AND status = ''");
			$count=mysql_num_rows($result2);
			if($count>0) {
			echo '<a href="" class="new"><i class="typcn typcn-bell"></i></a>';	
			} else {
			echo '<a href="" ><i class="typcn typcn-bell"></i></a>';		
			}
			?>
            
            <div class="dropdown-menu">
            
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have <?php echo $count ?> unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  
                  <div class="media-body">
				  <?php
					 $result2 = mysql_query("SELECT * FROM notification WHERE student='$username' ORDER BY id DESC");
while($row2 = mysql_fetch_array($result2))
	{
		$date = $row2['date'];
		$date = date('F d, Y',strtotime($date));
		              echo '<p>'.$row2["notification"].'</p>';
					  echo '<span>'.$date.'</span>';
	}
	?>
      
                    
                  </div><!-- media-body -->
                </div><!-- media -->
               
              </div><!-- az-notification-list -->
              <!-- <div class="dropdown-footer"><a href="">View All Notifications</a></div> -->
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="./img/user.png" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="./img/user.png" alt="">
                </div><!-- az-img-user -->
                <h6><?php echo $name ?></h6>
                
              </div><!-- az-header-profile -->

              <a href="account.php" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="../../index.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
      <div class="container">
        <div class="az-content-left az-content-left-components">
          <div class="component-item">
            <label>Admission Application</label>
            <nav class="nav flex-column">
              <a href="#" class="nav-link">Personal Information</a>
              <a href="#" class="nav-link">Academic Programs</a>
              
            </nav>
            <label>Admission Requirements</label>
            <nav class="nav flex-column">
              <a href="#" class="nav-link"><b>Clear photocopy of the following</b></a>
              <a href="#" class="nav-link">1. Birth Certificate (PSA Certified)</a>
              <a href="#" class="nav-link">2. Baptismal Certificate</a>
              <a href="#" class="nav-link">3. Confirmation Certificate</a>
              <a href="#" class="nav-link">4. Marriage Certificate (For married applicants)</a>
              <a href="#" class="nav-link"><b>Original Copy of the Following</b></a>
              <a href="#" class="nav-link">5. Form 138 - Report Card</a>
              <a href="#" class="nav-link">6. Form 137 - Transcript of Records</a>
              <a href="#" class="nav-link">7. Honorable Dismissal and TOR for Transferee</a>
              <a href="#" class="nav-link">8. 1x1 Recent ID Pictures</a>
            </nav>
          </div><!-- component-item -->

        </div><!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <div class="az-content-breadcrumb">
            <span>Home</span>
            <span>Admission</span>
          </div>
		  
<div id="savepdf" style="display:block;background:#FFF;color:#000;margin:10px;float:left;">
          <h2 class="az-content-title">Admission Application</h2>
<!-- 
          <div class="az-content-label mg-b-5">Head</div>
          <p class="mg-b-20">Texy.</p>
-->

<div class="az-content-label mg-b-5">Personal Information (N/A if not available)</div>
<form action="updateexec.php" method="POST"  enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo $id ?>">     
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Last name</p>
              <input class="form-control"  placeholder="Last Name" type="text" name="lastname" value="<?php echo $lastname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Given name</p>
              <input class="form-control"  placeholder="Given Name" type="text" name="firstname" value="<?php echo $firstname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Middle Name</p>
              <input class="form-control"  placeholder="Middle Name" type="text" name="middlename" value="<?php echo $middlename ?>">
            </div><!-- col -->
          </div>
		  <!-- end row -->
		  <br>
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Age</p>
              <input class="form-control"  placeholder="Age" type="number" name="age" value="<?php echo $age ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Gender</p>
			<select  name="gender" class="form-control" >
				<option><?php echo $gender ?></option>
				<option>Male</option>
				<option>Female</option>
			</select>
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Date of Birth</p>
              <input class="form-control"  placeholder="Date of Birth" type="date" name="bday" value="<?php echo $bday ?>"> 
            </div><!-- col -->
			
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Place of Birth</p>
              <input class="form-control"  placeholder="Place of Birth" type="text" name="bplace" value="<?php echo $bplace ?>">
            </div><!-- col -->
          </div>
		  <!-- end row -->
<br>
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Citizenship</p>
              <input class="form-control"  placeholder="Citizenship" type="text" name="citizen" value="<?php echo $citizen ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Civil Status</p>
              <input class="form-control"  placeholder="Civil Status" type="text" name="civil" value="<?php echo $civil ?>">
            </div><!-- col -->
			<div class="col-lg">
			<p class="mg-b-0" style="color:#000">Religion</p>
              <input class="form-control"  placeholder="Religion" type="text" name="religion" value="<?php echo $religion ?>">
            </div><!-- col -->
          </div>
		  <!-- end row -->
         <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Address</p>
              <input class="form-control"  placeholder="Address" type="text" name="address" value="<?php echo $address ?>">
            </div><!-- col -->
			</div>
		<br>
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Telephone Number</p>
              <input class="form-control"  placeholder="Telephone Number" type="text" name="telnum"  value="<?php echo $telnum ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Mobile Number</p>
              <input class="form-control"  placeholder="Mobile Number" type="text" name="contact" value="<?php echo $contact ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Email Address</p>
              <input class="form-control"  placeholder="Email Address" type="text" name="email" value="<?php echo $email ?>">
            </div><!-- col -->
          </div>
		  <br>
		  
          <div class="az-content-label mg-b-5">Family Background (N/A if not available)</div>
		  <br>
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Father's Name</p>
              <input class="form-control"  placeholder="Father's Name" type="text" name="fname"  value="<?php echo $fname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Occupation</p>
              <input class="form-control"  placeholder="Occupation" type="text" name="foccupation" value="<?php echo $foccupation ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Religion</p>
              <input class="form-control"  placeholder="Religion" type="text" name="freligion" value="<?php echo $freligion ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Contact Number</p>
              <input class="form-control"  placeholder="Contact Number" type="text" name="fcontact" value="<?php echo $fcontact ?>">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Mother's Name</p>
              <input class="form-control"  placeholder="Father's Name" type="text" name="mname" value="<?php echo $mname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Occupation</p>
              <input class="form-control"  placeholder="Occupation" type="text" name="moccupation" value="<?php echo $moccupation ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Religion</p>
              <input class="form-control"  placeholder="Religion" type="text" name="mreligion" value="<?php echo $mreligion ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Contact Number</p>
              <input class="form-control"  placeholder="Contact Number" type="text" name="mcontact" value="<?php echo $mcontact ?>">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
		  
			<!-- start row -->
			 (If not staying with parents)
          <div class="row row-sm">
		  
		   <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Guarduan's Name</p>
              <input class="form-control"  placeholder="Father's Name" type="text" name="gname" value="<?php echo $gname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Occupation</p>
              <input class="form-control"  placeholder="Occupation" type="text" name="goccupation" value="<?php echo $goccupation ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Religion</p>
              <input class="form-control"  placeholder="Religion" type="text" name="greligion" value="<?php echo $greligion ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Contact Number</p>
              <input class="form-control"  placeholder="Contact Number" type="text" name="gcontact" value="<?php echo $gcontact ?>">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
			<!-- start row -->
			 (If married)
          <div class="row row-sm">
		  
		   <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Spouse's Name</p>
              <input class="form-control"  placeholder="Father's Name" type="text" name="sname" value="<?php echo $sname ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Occupation</p>
              <input class="form-control"  placeholder="Occupation" type="text" name="soccupation" value="<?php echo $soccupation ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Religion</p>
              <input class="form-control"  placeholder="Religion" type="text" name="sreligion" value="<?php echo $sreligion ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Contact Number</p>
              <input class="form-control"  placeholder="Contact Number" type="text" name="scontact" value="<?php echo $scontact ?>">
            </div><!-- col -->
          </div>
		  <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">School Last Attended</p>
              <input class="form-control"  placeholder="School Address" type="text" name="school" value="<?php echo $school ?>">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Year Graduated</p>
              <input class="form-control"  placeholder="Year Graduated" type="text" name="graduated" value="<?php echo $graduated ?>">
            </div><!-- col -->
			</div>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">School Address</p>
              <input class="form-control"  placeholder="School Address" type="text" name="saddress" value="<?php echo $saddress ?>">
            </div><!-- col -->
			</div>
		<br>
		
          <div class="az-content-label mg-b-5">Academic Programs</div>
		  <p class="mg-b-0" style="color:#000">Please select your top two(2) preffered courses</p>
		  <br>
		   <div class="row row-sm">
		   <!-- start col -->
            <div class="col-lg">
			
		<?php	
$result2aa = mysql_query("SELECT * FROM courses WHERE username='$uname'");
while($row2aa = mysql_fetch_array($result2aa))
	{
		echo $row2aa['course'].'<br>';
	}
	?>
			   </div>
		</div>	
		  <!-- end row -->
		 <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000"><b>Reason for choosing STC</b></p>
			<textarea class="form-control"  style="height:150px" name="reason"><?php echo $reason ?></textarea>
              
            </div><!-- col -->
			</div>
		<br>
		</div>
<div class="az-content-label mg-b-5">Requirements</div>
		  <br>
			<div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Birth Certificate</p>
            <?php
			if($file1 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file1">';
			} else { 
			echo '<a href="../../uploads/'.$file1.'" download>View Birth Certificate</a>';
			}
			?>
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Baptismal Certificate</p>
            <?php
			if($file2 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file2">';
			} else { 
			echo '<a href="../../uploads/'.$file2.'" download>View Baptismal Certificate</a>';
			}
			?>
            
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Confirmation Certificate</p>
            <?php
			if($file3 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file3">';
			} else { 
			echo '<a href="../../uploads/'.$file3.'" download>View Confirmation Certificate</a>';
			}
			?>
            
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Marraige Ceritificate</p>
            <?php
			if($file4 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file4">';
				
			} else { 
			echo '<a href="../../uploads/'.$file4.'" download>View Marraige Ceritificate</a>';
			}
			?>
            
            </div><!-- col -->
			</div>
		<br>
		<div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Form 138 - Report Card<br><br></p>
            <?php
			if($file5 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file5">';
				
			} else { 
			echo '<a href="../../uploads/'.$file5.'" download>View Form 138 - Report Card</a>';
			}
			?>
            
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Form 137 - Transcript of Records<br><br></p>
            <?php
			if($file6 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file6">';
				
			} else { 
			echo '<a href="../../uploads/'.$file6.'" download>View Form 137 - Transcript of Records</a>';
			}
			?>
           
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Certificate of Good Moral Character</p>
            <?php
			if($file7 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file7">';
				
			} else { 
			echo '<a href="../../uploads/'.$file7.'" download>View Certificate of Good Moral Character</a>';
			}
			?>
           
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0" style="color:#000">Honorable Dismissal and TOR for Transferee</p>
            <?php
			if($file8 == '') {
			echo '<input class="form-control" placeholder="file1" type="file"  name="file8">';
				
			} else { 
			echo '<a href="../../uploads/'.$file8.'" download>View Honorable Dismissal and TOR for Transferee</a>';
			}
			?>
           
            </div><!-- col -->
			</div>
			<br>
			<br>
			<input type="submit" name="Update Admission Information" class="btn btn-secondary">
			<br><br>
</form>
<!-- end -->
<button onclick="a1()"  class="btn btn-secondary" style="width:200px">Export as PDF</button>
<br>
<input type="button" name="submit" value="Approve Application" class="btn btn-primary" onclick="window.location='approve.php?id=<?php echo $uname; ?>&contact=<?php echo $telnum ?>'" style="width:200px">
<br>
<input type="button" name="submit" value="Decline Application" class="btn btn-danger" onclick="window.location='decline.php?id=<?php echo $uname; ?>'" style="width:200px">
          <hr class="mg-y-30">

          <div class="ht-40"></div>

<br>
<br>
          <div class="az-footer mg-t-auto">
            <div class="container">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sta Teresa College - 2022</span>
              
            </div><!-- container -->
          </div><!-- az-footer -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="../lib/pickerjs/picker.min.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>

    <script src="../js/azia.js"></script>
    <script>
      // Additional code for adding placeholder in search box of select2
      (function($) {
        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);
    </script>
  <script type="text/javascript">//<![CDATA[
  
function a1() {
var pdf = new jsPDF('p', 'pt', 'a4');
pdf.addHTML($("#savepdf"), function() {
  var output = pdf.output("datauristring");
  //alert(output);
  const downloadLink = document.createElement("a");

  pdf.output("datauri"); //This will output the PDF in a new window
const fileName = "admission.pdf";
downloadLink.href = output;
downloadLink.download = fileName;
downloadLink.click();
});
}


function printDiv(divId,
  title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write('<html><head><title>${title}</title>');
  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); // necessary for IE >= 10
  mywindow.focus(); // necessary for IE >= 10*/

  mywindow.print();
  mywindow.close();

  return true;
}
</script>
  </body>
</html>
