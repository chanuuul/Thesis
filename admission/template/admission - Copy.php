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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Sta Teresa College</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.php.html" class="az-logo" style="color:green;text-transform:uppercase"><span></span> Sta Teresa College</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            
            <li class="nav-item active show">
              <a href="admission.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Admission</a>
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
		$status = $row2['status']; 
		              echo '<p>'.$row2["notification"].'</p>';
					  if($status == 'Confirmed') {
						  
					  } else {
					  echo '<input type="button" value="Confirm '.$row2['type'].'" class="btn btn-primary" onclick="window.location=\'confirm.php?id='.$row2['id'].'\'">';
					  }
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

              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
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
          <h2 class="az-content-title">Admission Application</h2>
<!-- 
          <div class="az-content-label mg-b-5">Head</div>
          <p class="mg-b-20">Texy.</p>
-->
<form action="admissionexec.php" method="POST">
<div class="az-content-label mg-b-5">Personal Information (N/A if not available)</div>

          
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Last name</p>
              <input class="form-control" required placeholder="Last Name" type="text" name="lastname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Given name</p>
              <input class="form-control" required placeholder="Given Name" type="text" name="firstname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Middle Name</p>
              <input class="form-control" required placeholder="Middle Name" type="text" name="middlename">
            </div><!-- col -->
          </div>
		  <!-- end row -->
		  <br>
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Age</p>
              <input class="form-control" required placeholder="Age" type="number" name="age">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Gender</p>
			<select required name="gender" class="form-control" required>
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Date of Birth</p>
              <input class="form-control" required placeholder="Date of Birth" type="date" name="bday">
            </div><!-- col -->
			
            <div class="col-lg">
			<p class="mg-b-0">Place of Birth</p>
              <input class="form-control" required placeholder="Place of Birth" type="text" name="bplace">
            </div><!-- col -->
          </div>
		  <!-- end row -->
<br>
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Citizenship</p>
              <input class="form-control" required placeholder="Citizenship" type="text" name="citizen">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Civil Status</p>
              <input class="form-control" required placeholder="Civil Status" type="text" name="civil">
            </div><!-- col -->
			<div class="col-lg">
			<p class="mg-b-0">Religion</p>
              <input class="form-control" required placeholder="Religion" type="text" name="religion">
            </div><!-- col -->
          </div>
		  <!-- end row -->
         <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Address</p>
              <input class="form-control" required placeholder="Address" type="text" name="address">
            </div><!-- col -->
			</div>
		<br>
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0">Telephone Number</p>
              <input class="form-control" required placeholder="Telephone Number" type="text" name="telnum">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Mobile Number</p>
              <input class="form-control" required placeholder="Mobile Number" type="text" name="contact">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Email Address</p>
              <input class="form-control" required placeholder="Email Address" type="text" name="email">
            </div><!-- col -->
          </div>
		  <br>
		  
          <div class="az-content-label mg-b-5">Family Background (N/A if not available)</div>
		  <br>
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0">Father's Name</p>
              <input class="form-control" required placeholder="Father's Name" type="text" name="fname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Occupation</p>
              <input class="form-control" required placeholder="Occupation" type="text" name="foccupation">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Religion</p>
              <input class="form-control" required placeholder="Religion" type="text" name="freligion">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Contact Number</p>
              <input class="form-control" required placeholder="Contact Number" type="text" name="fcontact">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
		   <div class="col-lg">
			<p class="mg-b-0">Mother's Name</p>
              <input class="form-control" required placeholder="Father's Name" type="text" name="mname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Occupation</p>
              <input class="form-control" required placeholder="Occupation" type="text" name="moccupation">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Religion</p>
              <input class="form-control" required placeholder="Religion" type="text" name="mreligion">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Contact Number</p>
              <input class="form-control" required placeholder="Contact Number" type="text" name="mcontact">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
		  
			<!-- start row -->
			 (If not staying with parents)
          <div class="row row-sm">
		  
		   <div class="col-lg">
			<p class="mg-b-0">Guarduan's Name</p>
              <input class="form-control" required placeholder="Father's Name" type="text" name="gname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Occupation</p>
              <input class="form-control" required placeholder="Occupation" type="text" name="goccupation">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Religion</p>
              <input class="form-control" required placeholder="Religion" type="text" name="greligion">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Contact Number</p>
              <input class="form-control" required placeholder="Contact Number" type="text" name="gcontact">
            </div><!-- col -->
          </div>
		  <br>
		  <!-- end row -->
			<!-- start row -->
			 (If married)
          <div class="row row-sm">
		  
		   <div class="col-lg">
			<p class="mg-b-0">Spouse's Name</p>
              <input class="form-control" required placeholder="Father's Name" type="text" name="sname">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Occupation</p>
              <input class="form-control" required placeholder="Occupation" type="text" name="soccupation">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Religion</p>
              <input class="form-control" required placeholder="Religion" type="text" name="sreligion">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Contact Number</p>
              <input class="form-control" required placeholder="Contact Number" type="text" name="scontact">
            </div><!-- col -->
          </div>
		  <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">School Last Attended</p>
              <input class="form-control" required placeholder="School Address" type="text" name="school">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Year Graduated</p>
              <input class="form-control" required placeholder="Year Graduated" type="text" name="graduated">
            </div><!-- col -->
			</div>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">School Address</p>
              <input class="form-control" required placeholder="School Address" type="text" name="saddress">
            </div><!-- col -->
			</div>
		<br>
		
          <div class="az-content-label mg-b-5">Academic Programs</div>
		  <p class="mg-b-0">Please select your top two(2) preffered courses</p>
		  <br>
		   <div class="row row-sm">
		   <!-- start col -->
            <div class="col-lg">
			<div class="az-content-label mg-b-5">College of Education</div>
			<label for="a1"><input name="course" type="checkbox" id="a1" value="Bachelor of Early Childhood Education (BECE)">Bachelor of Early Childhood Education (BECE)</label><br>
			<label for="a2"><input  name="course"  type="checkbox" id="a2" value="Bachelor of Elementary Education (BEEd)">Bachelor of Elementary Education (BEEd)</label><br>
			<label for="a3"><input  name="course"  type="checkbox" id="a3" value="Bachelor of Secondary Education Major in Mathematics (BSEd)">Bachelor of Secondary Education Major in Mathematics (BSEd)</label><br>
			<label for="a4"><input  name="course"  type="checkbox" id="a4" value="Bachelor of Secondary Education Major in Filipino (BSEd)">Bachelor of Secondary Education Major in Filipino (BSEd)</label><br>
			<label for="a5"><input  name="course"  type="checkbox" id="a5" value="Bachelor of Secondary Education Major in English (BSEd)">Bachelor of Secondary Education Major in English (BSEd)</label><br>
			<label for="a6"><input  name="course"  type="checkbox" id="a6" value="Bachelor of Secondary Education Major in Social Science (BSEd)">Bachelor of Secondary Education Major in Social Science (BSEd)</label><br>
			<label for="a7"><input  name="course"  type="checkbox" id="a7" value="Bachelor of Secondary Education Major in General Science (BSEd)">Bachelor of Secondary Education Major in General Science (BSEd)</label><br>
			<label for="a8"><input  name="course"  type="checkbox" id="a8" value="Bachelor of Secondary Education Major in Religious and Values Education (BSEd)">Bachelor of Secondary Education Major in Religious and Values Education (BSEd)</label><br>
            </div>
			<!-- col -->
		   <!-- start col -->
            <div class="col-lg">
			<div class="az-content-label mg-b-5">College of Business Management</div>
			<label for="a9"><input name="course"   type="checkbox" id="a9" value="Bachelor of Science in Office Administration (BSOA)">Bachelor of Science in Office Administration (BSOA)</label><br>
			<label for="a10"><input  name="course"  type="checkbox" id="a10" value="Bachelor of Science in Tourism Management (BSTM)">Bachelor of Science in Tourism Management (BSTM)</label><br>
			<label for="a11"><input  name="course"  type="checkbox" id="a11" value="Bachelor of Science in Hospitality Management (BSHM)">Bachelor of Science in Hospitality Management (BSHM)</label><br>
			<label for="a12"><input  name="course"  type="checkbox" id="a12" value="Bachelor of Science in Psychology (BSP)">Bachelor of Science in Psychology (BSP)</label><br>
			<label for="a13"><input  name="course"  type="checkbox" id="a13" value="Administrative Office Management (AOM)">Administrative Office Management (AOM)</label><br>
			<label for="a14"><input name="course"  type="checkbox" id="a14" value="Bachelor of Science in Business Management Major in Human Resource Management (BSBM)">Bachelor of Science in Business Management Major in Human Resource Management (BSBM)</label><br>
			<label for="a15"><input  name="course"  type="checkbox" id="a15" value="Bachelor of Science in Business Management Major in Financial Management (BSBM)">Bachelor of Science in Business Management Major in Financial Management (BSBM)</label><br>
            </div>
			<!-- col -->
			</div>
		  <!-- end row -->
		   <div class="row row-sm">
		   <!-- start col -->
            <div class="col-lg">
			<div class="az-content-label mg-b-5">College of Computer Science</div>
			<label for="a16"><input  name="course"  type="checkbox" id="a16" value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</label><br>
			<label for="a17"><input name="course"   type="checkbox" id="a17" value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</label><br>
			<label for="a18"><input  name="course"  type="checkbox" id="a18" value="ssociate in Computer Technology">Associate in Computer Technology</label><br>
			</div>
			</div>
			  <br>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Reason for choosing STC</p>
			<textarea class="form-control" required style="height:150px" name="reason"></textarea>
              
            </div><!-- col -->
			</div>
		<br>
		<p align="justify"><input type="checkbox" required> &nbsp;I hereby certify that all information in this application form and all supporting documents are true and correct. In this connection, I fully un-derstand that any misrepresentation or failure to disclose on my part as required herein, may cause the disapproval of this application. in the event that this is approved, It is deemed that the applicant shall accept and abide by the policies, procedures, and conditions set by Sta. Teresa College. 
</p>
<div class="az-content-label mg-b-5">Requirements</div>
		  <br>
			<div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Birth Certificate</p>
              <input class="form-control" placeholder="file1" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Baptismal Certificate</p>
              <input class="form-control" placeholder="file2" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Confirmation Certificate</p>
              <input class="form-control" placeholder="file3" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Marraige Ceritificate</p>
              <input class="form-control"  placeholder="file4" type="file" name="address">
            </div><!-- col -->
			</div>
		<br>
		<div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Form 138 - Report Card<br><br></p>
              <input class="form-control"  placeholder="file5" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Form 137 - Transcript of Records<br><br></p>
              <input class="form-control"  placeholder="file6" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Certificate of Good Moral Character</p>
              <input class="form-control"  placeholder="file7" type="file" name="address">
            </div><!-- col -->
            <div class="col-lg">
			<p class="mg-b-0">Honorable Dismissal and TOR for Transferee</p>
              <input class="form-control"  placeholder="file8" type="file" name="address">
            </div><!-- col -->
			</div>
			
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
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
    <script>
      $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
          $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // AmazeUI Datetimepicker
        $('#datetimepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:ii',
          autoclose: true
        });

        // jQuery Simple DateTimePicker
        $('#datetimepicker2').appendDtpicker({
          closeOnSelected: true,
          onInit: function(handler) {
            var picker = handler.getPicker();
            $(picker).addClass('az-datetimepicker');
          }
        });

        new Picker(document.querySelector('#datetimepicker3'), {
          headers: true,
          format: 'MMMM DD, YYYY HH:mm',
          text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day',
            hour: 'Hour',
            minute: 'Minute'
          },
        });


        $(document).ready(function(){
          $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
          });

          $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

      });
    </script>
  </body>
</html>
