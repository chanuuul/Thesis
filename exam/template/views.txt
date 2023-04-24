<?php  
include('../auth.php');
include('../../connect.php');
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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Sta Teresa College</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!--Sta Teresa College CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo" style="color:green;text-transform:uppercase"><span></span> Sta Teresa College</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.php" class="az-logo"><span></span>Sta Teresa College</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link"><i class="typcn typcn-chart-pie"></i> Report</a>
            </li>
            <li class="nav-item ">
              <a href="user.php" class="nav-link"><i class="typcn typcn-book"></i> User List</a>
            </li>
            <li class="nav-item ">
              <a href="admission.php" class="nav-link"><i class="typcn typcn-book"></i> Admission</a>
            </li>
            <li class="nav-item ">
              <a href="guidance.php" class="nav-link"><i class="typcn typcn-book"></i> Guidance Account</a>
            </li>
            <li class="nav-item ">
              <a href="result.php" class="nav-link"><i class="typcn typcn-book"></i> Results</a>
            </li>
            
            
           
           
           
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          
          <div class="dropdown az-header-notification">
		  
<?php
			include('../../connect.php');
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

              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="../../index.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, welcome back!</h2>
              
            </div>
           
          </div><!-- az-dashboard-one-title -->
	
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>
#container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
</style>
	<?php
													$id2 = $_GET['id'];
											include('../../connect.php');
											$result11 = mysql_query("SELECT * FROM quiz WHERE  id  = '$id2' ORDER BY ID DESC");
											while($row11 = mysql_fetch_array($result11))
											{
												$name1 = $row11['name'];
												$date = $row11['date'];
												$description = $row11['description'];
												$id11a = $row11['id'];
												$subject =  $row11['name'];
											}
													include('../../connect.php');
										
											?>

</head>
<body>
	<h5>Quiz Title: <?php echo $name1 ?></h5>
							<h5>Date Posted: <?php echo $date ?></h5>
							<h5>Description: <?php echo $description ?></h5>
						
<script src="js/highcharts.js"></script>
<script src="js/data.js"></script>
<script src="js/exporting.js"></script>


					    <div id="container2" style="border:0px solid #000;"></div>
							<table class="table table-striped table-bordered table-hover" id="data2">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Score</th>
                                            
                                        </tr>
                                    </thead>
									<tbody>
					<?php
							$quiz = $_GET['id'];
					include('../../connect.php');
					
					//number of question
					$resultq = mysql_query("SELECT * FROM questions WHERE questionid = '$quiz'");
					$countq=mysql_num_rows($resultq);
					$c1 = 0;
					$result = mysql_query("SELECT * FROM results1 WHERE quiz = '$quiz'  AND score = 'correct' GROUP BY score");
					while($row = mysql_fetch_array($result))
					{
						$student = $row['student'];
						//echo $student;
						// student information								
							$resulta = mysql_query("SELECT * FROM login WHERE username = '$student'");
							while($rowa = mysql_fetch_array($resulta))
							{
								$uu =$rowa['uname'];
							
							}							
							$resultaa = mysql_query("SELECT * FROM login WHERE username = '$uu'");
							while($rowaa = mysql_fetch_array($resultaa))
							{
								$name =$rowaa['name'];
								
							}
							$score = $row['score'];
							$d = $countq/2;
							if($score >= $d) {
								$status = 'Passed';
							} else {
								$status = 'Failed';
							}
							$c1 +=1;
						// student information
						echo '<tr>';
						echo '<td>Number of Correct Answers</td>';
						echo '<td>'.$c1.'</td>';
						echo '</tr>';
					}
					?>
					<?php
							$quiz = $_GET['id'];
					include('../../connect.php');
					
					//number of question
					$resultq = mysql_query("SELECT * FROM questions WHERE questionid = '$quiz' ");
					$countq=mysql_num_rows($resultq);
					$c2 = 0;
					$result = mysql_query("SELECT * FROM results1 WHERE quiz = '$quiz' AND score = 'wrong'");
					while($row = mysql_fetch_array($result))
					{
						$student = $row['student'];
						//echo $student;
						// student information								
							$resulta = mysql_query("SELECT * FROM login WHERE username = '$student'");
							while($rowa = mysql_fetch_array($resulta))
							{
								$uu =$rowa['uname'];
							
							}							
							$resultaa = mysql_query("SELECT * FROM login WHERE username = '$uu'");
							while($rowaa = mysql_fetch_array($resultaa))
							{
								$name =$rowaa['name'];
								
							}
							$score = $row['score'];
							if($score == 'correct') {
								$c +=1;
							}
							$d = $countq/2;
							if($score >= $d) {
								$status = 'Passed';
							} else {
								$status = 'Failed';
							}
							$c2 +=1;
						// student information
						echo '<tr>';
						echo '<td>Number of Wrong Answers</td>';
						echo '<td>'.$c2.'</td>';
						echo '</tr>';
					}
					?>
					</tbody>
					</table>
					          
<script>

Highcharts.chart('container2', {
    data: {
        table: 'data2'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Analytics '
    },
plotOptions: {
            series: {
                colorByPoint: true
            }
        },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Score'
        }
    },
  
});

</script>
            

							

          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sta Teresa College  - 2022</span>
        
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/chart.flot.sampledata.js"></script>
    <script src="../js/dashboard.sampledata.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
