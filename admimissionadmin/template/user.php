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
  <script >(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
//# sourceURL=pen.js
</script>	

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo" style="color:green;text-transform:uppercase"><span></span> Sta Teresa College</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu"><style>
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
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
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
              <h2 class="az-dashboard-title">User List</h2>
              
            </div>
           
          </div><!-- az-dashboard-one-title -->

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  
	 $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
	$("body").append("<div id='opaque' style='display: none;'></div>");

$(document).bind('loading.facebox', function() {
    $("#opaque").show();
});
$(document).bind('close.facebox', function() {
    $("#opaque").hide();
});
$(document).bind('afterReveal.facebox', function() {
    // this is a fix for IE6 which resets the height to 100% of the window height
    $("#opaque").height($(document).height());
});
    })
	</script>
        <input type="search" class="light-table-filter email form-control" data-table="order-table" placeholder="Search"><br>
						<table id="customers" width="100%" border="0" class=" order-table table" id="data-table">

												<thead>
													<tr>
														<th><center>Name</th>
														<th><center>Address</th>
														<th><center>Contact Number</th>
														<th><center>Action</th>
													</tr>
												</thead>

												<tbody>
															<?php
													
											include('../connect.php');
											$result = mysql_query("SELECT * FROM login WHERE type ='admission'");
											while($row = mysql_fetch_array($result))
											{
												$uname =$row['username'];	
												$result1 = mysql_query("SELECT * FROM login WHERE username ='$uname'");
												while($row1 = mysql_fetch_array($result1))
												{
											echo'<tr>';
											echo'		<td>'.$row1["name"].'</td>';
											echo'		<td><center>'.$row1["address"].'</td>';
											echo'		<td><center>'.$row1["contact"].'</td>';
											echo'		<td width="20%"><center> 
											<a href="view2.php?id='.$row["username"].'" style="width:100%" class="btn btn-primary" >View Admission</a>
											<a href="delete4.php?id='.$row["id"].'&username='.$uname.'" style="margin-top:10px;width:100%" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete User</a></td>';
											echo'	</tr>';
												}
											}
											?>
												
												</tbody>
											</table>
						<!-- start modal -->
						
						
						<!-- end modal -->
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
              show: true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
            show: true,
    				min: 0,
    				max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
    			},
    			xaxis: {
            show: true,
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
              show: true,
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
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
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
              show: true,
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
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
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
