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
            <li class="nav-item ">
              <a href="index.php" class="nav-link"><i class="typcn typcn-chart-pie"></i> Home</a>
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


	<?php
													$id2 = $_GET['id'];
											include('../../connect.php');
											$result11 = mysql_query("SELECT * FROM quiz WHERE teacher = '$username' AND id  = '$id2' ORDER BY ID DESC");
											while($row11 = mysql_fetch_array($result11))
											{
												$name1 = $row11['name'];
												$date = $row11['date'];
												$description = $row11['description'];
												$id11 = $row11['id'];
											}
											?>
											
     

<div id="qrcode"></div>
<input type="hidden" id="plate" value="<?php echo $name1 ?>sa">
							<h5>Quiz Title: <?php echo $name1 ?></h5>
							<h5>Date Posted: <?php echo $date ?></h5>
							<h5>Description: <?php echo $description ?></h5>
							
							<hr>
							<h5>Question List</h5>
							<table class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th><center>Question</th>
														<th><center>Choice A</th>
														<th><center>Choice B</th>
														<th><center>Choice C</th>
														<th><center>Choice D</th>
														<th><center>Correct Answer</th>
														<th><center>Action</th>
													</tr>
												</thead>

												<tbody>
															<?php
													include('../../connect.php');
													$i = 0;
											$result = mysql_query("SELECT * FROM questions WHERE teacher = '$username' AND questionid = '$id11'");
											while($row = mysql_fetch_array($result))
											{
											$i = $i+1;
											echo'<tr>';
											echo'		<td>'.$row["question"].'</td>';
											echo'		<td><center>'.$row["ansa"].'</td>';
											echo'		<td><center>'.$row["ansb"].'</td>';
											echo'		<td><center>'.$row["ansc"].'</td>';
											echo'		<td><center>'.$row["ansd"].'</td>';
											echo'		<td><center>'.$row["corans"].'</td>';
											echo'		<td><center><a href="viewana.php?id='.$i.'&quiz='.$id11.'">View Analytics</a> | <a href="delete5.php?id='.$row["id"].'">Delete Question</a></td>';
											echo'	</tr>';
											}
											?>
												
												</tbody>
											</table>

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
    <script>
      $(function(){
        'use strict'

    		var plot = $.plot('#flotChart', [{
          data: flotSampleData3,
          color: '#007bff',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        },{
          data: flotSampleData4,
          color: '#560bd0',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
             : true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
           : true,
    				min: 0,
    				max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
    			},
    			xaxis: {
           : true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        $.plot('#flotChart1', [{
          data: dashData2,
          color: '#00cccc'
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
             : true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
           : false,
            min: 0,
            max: 35
          },
    			xaxis: {
           : false,
            max: 50
          }
    		});

        $.plot('#flotChart2', [{
          data: dashData2,
          color: '#007bff'
        }], {
    			series: {
    				shadowSize: 0,
            bars: {
             : true,
              lineWidth: 0,
              fill: 1,
              barWidth: .5
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
           : false,
            min: 0,
            max: 35
          },
    			xaxis: {
           : false,
            max: 20
          }
    		});


        //-------------------------------------------------------------//


        // Line chart
        $('.peity-line').peity('line');

        // Bar charts
        $('.peity-bar').peity('bar');

        // Bar charts
        $('.peity-donut').peity('donut');

        var ctx5 = document.getElementById('chartBar5').getContext('2d');
        new Chart(ctx5, {
          type: 'bar',
          data: {
            labels: [0,1,2,3,4,5,6,7],
            datasets: [{
              data: [2, 4, 10, 20, 45, 40, 35, 18],
              backgroundColor: '#560bd0'
            }, {
              data: [3, 6, 15, 35, 50, 45, 35, 25],
              backgroundColor: '#cad0e8'
            }]
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              enabled: false
            },
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                display: false,
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  max: 80
                }
              }],
              xAxes: [{
                barPercentage: 0.6,
                gridLines: {
                  color: 'rgba(0,0,0,0.08)'
                },
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  display: false
                }
              }]
            }
          }
        });

        // Donut Chart
        var datapie = {
          labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
          datasets: [{
            data: [25,20,30,15,10],
            backgroundColor: ['#6f42c1', '#007bff','#17a2b8','#00cccc','#adb2bd']
          }]
        };

        var optionpie = {
          maintainAspectRatio: false,
          responsive: true,
          legend: {
            display: false,
          },
          animation: {
            animateScale: true,
            animateRotate: true
          }
        };

        // For a doughnut chart
        var ctxpie= document.getElementById('chartDonut');
        var myPieChart6 = new Chart(ctxpie, {
          type: 'doughnut',
          data: datapie,
          options: optionpie
        });

      });
    </script>
  </body>
</html>
