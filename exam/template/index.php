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
<style>

/* Float four columns side by side */
.column1 {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
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
            <li class="nav-item active">
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
              <h2 class="az-dashboard-title">Admin Dashboard</h2>
              
            </div>
           
          </div><!-- az-dashboard-one-title -->


    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

					  <!-- <a href="add.php" class="myButton" >Add Alumni</a>-->
					  
					  
					  <center><table>
					  <tr>
					  <td valign="top" width="45%">
					  <h3>First Choice Course</h3>
					    <div id="container2a" style="border:0px solid #000;"></div>
					  <table class="tftable order-table table" id="datatable2a" border="1" >
						  <thead>
						  <tr>
							<th>Course</th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						  include('../../connect.php');
											
						$result1 = mysql_query("SELECT course, count(*) as total,type FROM courses WHERE type = '1' GROUP BY course ")or die (mysql_error());
						while($row1 = mysql_fetch_array($result1))
						{
						echo '<tr>';
						echo '<td><a href="viewcourse.php?id='.$row1['course'].'">'.$row1['course'].'</a></td>';
						echo '<td>'.$row1['total'].'</td>';
						echo '</tr>';
						}
						  ?>
						  </tbody>
						  </table>
						  </td>
						  <td></td>
					  <td valign="top" width="45%">
					  <h3>Second Choice Course</h3>
					    <div id="container3a" style="border:0px solid #000;"></div>
					  <table class="tftable order-table table" id="datatable3a" border="1" >
						  <thead>
						  <tr>
							<th>Course</th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						   <?php
						  include('../../connect.php');
											
						$result1 = mysql_query("SELECT course, count(*) as total,type FROM courses WHERE type = '2' GROUP BY course ")or die (mysql_error());
						while($row1 = mysql_fetch_array($result1))
						{
						echo '<tr>';
						echo '<td><a href="viewcourse.php?id='.$row1['course'].'">'.$row1['course'].'</a></td>';
						echo '<td>'.$row1['total'].'</td>';
						echo '</tr>';
						}
						  ?>
						  </tbody>
						  </table></center>
					  </td>
					  </tr>
					  </table>
						  <br>
						  <br>
						  
						  
<div class="row1">
<!-- start -->
  <div class="column1">
    <div class="card1">
  
								<div id="container1" style="border:1px solid #000;"></div>
					  

						  <table class="tftable order-table table" id="datatable" border="1" >
						  <thead>
						  <tr>
							<th>Age</th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						  include('../../connect.php');
						$result1 = mysql_query("SELECT age, count(*) as total FROM admission GROUP BY age")or die (mysql_error());
						while($row1 = mysql_fetch_array($result1))
						{
						echo '<tr>';
						echo '<td>'.$row1['age'].'</td>';
						echo '<td>'.$row1['total'].'</td>';
						echo '</tr>';
						}
						  ?>
						  </tbody>
						  </table>
						  <br><br><br><br>
    </div>
  </div>
<!-- end -->
<!-- start -->
					  <div class="column1">
						<div class="card1">
								<div id="container2" style="border:1px solid #000;"></div>
						  <table class="tftable order-table table" id="datatable2" border="1" >
						  <thead>
						  <tr>
							<th></th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						  include('../../connect.php');
						echo '<tr>';
						$result1 = mysql_query("SELECT * FROM admission WHERE status = 'Pending'")or die (mysql_error());
						$count1=mysql_num_rows($result1);
						echo '<td>Total Number of New Applicant</td>';
						echo '<td>'.$count1.'</td>';
						echo '</tr>';
						echo '<tr>';
						$result2 = mysql_query("SELECT * FROM admission WHERE status = 'Declined'")or die (mysql_error());
						$count2=mysql_num_rows($result2);
						echo '<td>Total Number of Declined Applicant</td>';
						echo '<td>'.$count2.'</td>';
						echo '</tr>';
						$result3 = mysql_query("SELECT * FROM admission WHERE status = 'Approved'")or die (mysql_error());
						$count3=mysql_num_rows($result3);
						echo '<td>Total Number of Approved Applicant</td>';
						echo '<td>'.$count3.'</td>';
						echo '</tr>';
						  ?>
						  </tbody>
						  </table>
				</div>
			  </div>
<!-- end -->
 <br clear="all"><br clear="all">
<!-- start -->
					  <div class="column1">
						<div class="card1">
								<div id="container3" style="border:1px solid #000;"></div>
						  <table class="tftable order-table table" id="datatable3" border="1" >
						  <thead>
						  <tr>
							<th>Gender</th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						 
						  <?php
						  include('../../connect.php');
						$result1 = mysql_query("SELECT gender, count(*) as total FROM admission GROUP BY gender")or die (mysql_error());
						while($row1 = mysql_fetch_array($result1))
						{
						echo '<tr>';
						echo '<td>'.$row1['gender'].'</td>';
						echo '<td>'.$row1['total'].'</td>';
						echo '</tr>';
						}
						  ?>
						  </tbody>
						  </table>
				</div>
			  </div>
					  <div class="column1">
						<div class="card1">
								<div id="container4" style="border:1px solid #000;"></div>
						  <table class="tftable order-table table" id="datatable4" border="1" >
						  <thead>
						  <tr>
							<th>School</th>
							<th>Number of Records</th>
							</tr>
						  </thead>
						  <tbody>
						 
						  <?php
						  include('../../connect.php');
						$result1 = mysql_query("SELECT school, count(*) as total FROM admission GROUP BY school")or die (mysql_error());
						while($row1 = mysql_fetch_array($result1))
						{
						echo '<tr>';
						echo '<td>'.$row1['school'].'</td>';
						echo '<td>'.$row1['total'].'</td>';
						echo '</tr>';
						}
						  ?>
						  </tbody>
						  </table>
				</div>
			  </div>
<!-- end -->
 
  
  
</div>

                          </section>
						  <script type="text/javascript">//<![CDATA[


Highcharts.chart('container1', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total Number of Record by Age'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});

Highcharts.chart('container2a', {
    data: {
        table: 'datatable2a'
    },
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total Number of Record by Course'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container3a', {
    data: {
        table: 'datatable3a'
    },
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total Number of Record by Course'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container2', {
    data: {
        table: 'datatable2'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Number of Record of Admission'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container3', {
    data: {
        table: 'datatable3'
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Total Number of Record of Gender'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
Highcharts.chart('container4', {
    data: {
        table: 'datatable4'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Number of Record of School Attended'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
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
