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
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">

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
	
<style>
body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

  </head>
  <body  oncut="return false" onpaste="return false"  oncopy="return false">

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo" style="color:green;text-transform:uppercase"><span></span> Sta Teresa College</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            
            <li class="nav-item show">
              <a href="admission.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Online Examination</a>
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
              
              
            </div>
           
          </div><!-- az-dashboard-one-title -->

<?php
													$id11 = $_GET['id'];
											include('../connect.php');
											$result11a = mysql_query("SELECT * FROM quiz WHERE  id = '$id11' ORDER BY ID DESC");
											while($row11a = mysql_fetch_array($result11a))
											{
												$name1 = $row11a['name'];
												$date = $row11a['date'];
												$description = $row11a['description'];
												$id11a = $row11a['id'];
											}
											?>
							
<style>
.col-sm-6 {
	padding: 10px;
}
.pageMovement {
	margin-top: 25px;
}
.answer {
	margin:0 auto;
	display: block;
	width: 80%;
	font-weight: bold;
}
.container1 {
	padding:20px;

}
.hide {
	display: none;
}
.show {
	display: block;
}
.progress {
	margin-top: 25px;
}
#finishQuiz {
	margin-top: 25px;
}
.output {
	font-size:20px;
}
.glyphicon-ok-circle{
	color:#00FF64;
}
.glyphicon-remove-circle{
	color:#FF0004;
}
.selAnswer {
	background: #4E9267;
}
</style>
</head>
<body>
   <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
    </script>
 <script type="text/javascript">


</script>
<table width="100%" border="0">
	<tr>
		<td valign="top" width="45%">
		<center>
		<!-- start -->
		

<p style="font-size:25px;font-weight:bold"><?php echo $name1 ?></p>
<div class="container1" style="width:100%;border:0px solid #000;text-align">

  <div id="quizContent" class="row quiz" style="width:100%;border:0px solid #000">
    <div class="col-sm-12" style="width:100%;border:0px solid #000">
      <h4 id="quizHeader"></h2>
      <img class="img-responsive" id="quizimage" src="1.jpg" style="display:none">
    </div>

    <div id="questions" class="row" style="width:100%;border:0px solid #000;text-align:center">
      <div class="btn-primary" style="width:100%;margin:10px"> <a data-id="1" class="btn btn-default answer " style="color:#FFF">1</a> </div>
	  
      <div class="btn-primary" style="width:100%;margin:10px"> <a data-id="2" class="btn btn-default answer " style="color:#FFF">2</a> </div>
      <div class="btn-primary" style="width:100%;margin:10px">  <a data-id="3" class="btn btn-default answer " style="color:#FFF">3</a> </div>
      <div class="btn-primary" style="width:100%;margin:10px">  <a data-id="4" class="btn btn-default answer " style="color:#FFF">4</a> </div>
    </div>

  <div class="row pageMovement" style="padding:25px;width:100%;border:0px solid #000" style="">
  
    <div id="btnPrevious" class="col-xs-5 col-sm-4 btn btn-primary pull-left" style="display:none">Previous</div>
    <div id="btnNext" class="col-xs-5 col-sm-4 col-sm-offset-4 col-xs-offset-2 btn btn-primary pull-right">Next</div>
  </div>
  <div class="row ">
    <div id="finishQuiz" class=" btn btn-success btn-block  hide ">Submit Quiz</div>
  </div>
  
    <div id="progressBar" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:100%"> 0% Complete </div>
  </div>  </div>
</div>
		<!-- end -->
		</td>
		<td></td>
		
		<td valign="top" width="45%">
		<!-- start -->
		<script src="./js/camvas.js"></script>
		<script src="./js/pico.js"></script>
        <script src="./js/index.js"></script>
		<canvas width="640" height="480"></canvas>
		<div id="message"></div>
		<div id="message1"></div>
		<!-- end -->
		</td>
	</tr>
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
	  	  document.addEventListener('contextmenu', event => event.preventDefault());



//
var initialized = false;

function button_callback() {
//start quiz

      
// JSON Document
data = {"quizcontent": [
<?php
$idab = $_GET['id'];

			include('../connect.php');
			$result3 = mysql_query("SELECT * FROM questions WHERE questionid = '$idab'");
			while($row3 = mysql_fetch_array($result3))
			{
				
		echo '{"question": "'.$row3["question"].'", "image": "1.jpg", "correct": '.$row3["corans"].', "a1":"'.$row3["ansa"].'", "a2":"'.$row3["ansb"].'","a3":"'.$row3["ansc"].'","a4":"'.$row3["ansd"].'"},		';
				
			}
?>
    ],
	
};



console.log(data.quizcontent);
//for(var obj in data.quizcontent){console.log(data.quizcontent[obj].question);}

var lengthofobject = Object(data.quizcontent).length;
var curPage = 0,
    correct = 0;
var myAnswers = [];
var possibleAnswers = 4;
var newimage = document.getElementById("quizimage");
var myHeader = document.getElementById("quizHeader");
var classname = document.getElementsByClassName("answer");
var myQuestion = document.getElementById("questions");
var progressBar = document.getElementById("progressBar");
var btnNext = document.getElementById("btnNext");
//var btnPrevious = document.getElementById("btnPrevious");
var btnFinish = document.getElementById("finishQuiz");
checkPage();
btnNext.addEventListener("click", moveNext);
//btnPrevious.addEventListener("click", moveBack);
btnFinish.addEventListener("click", endQuiz);
for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', myAnswer, false);
}

function myAnswer() {
    var idAnswer = this.getAttribute("data-id");
    /// check for correct answer
    myAnswers[curPage] = idAnswer;
    if (data.quizcontent[curPage].correct == idAnswer) {
        //console.log('Correct Answer');;
    } else {
        //console.log('Wrong Answer');
    }
    addBox();
}

function addBox() {
    for (var i = 0; i < myQuestion.children.length; i++) {
        var curNode = myQuestion.children[i];
        if (myAnswers[curPage] == (i + 1)) {
            curNode.classList.add("selAnswer");
        } else {
            curNode.classList.remove("selAnswer");
        }
    }
}

function moveNext() {
    ///check if an answer has been made
    if (myAnswers[curPage]) {
        //console.log('okay to proceed');
        if (curPage < (lengthofobject - 1)) {
            curPage++;
            checkPage(curPage);
			
        } else {
            ///check if quiz is completed
            //console.log(curPage + ' ' + lengthofobject);
            if (lengthofobject >= curPage) {
                endQuiz();
            } else {
                //console.log('end of quiz Page ' + curPage);
            }
        }
    } else {
        //console.log('not answered');
    }
}

function endQuiz() {
	//alert();
    if (myAnswers[(lengthofobject-1)]) {
        var output = "<div class='output'>Quiz Results<BR>";
        var questionResult = "NA";
        var questionscore = "NA";
        //console.log('Quiz Over');
        for (var i = 0; i < myAnswers.length; i++) {
            if (data.quizcontent[i].correct == myAnswers[i]) {
                questionResult = '<i class="fa-solid fa-check"></i>';
				questionscore = 'correct';
                correct++;
				
		
            } else {
                questionResult = '<i class="fa-solid fa-circle-xmark"></i>';questionscore = 'correct';
                questionscore = 'wrong';
                
            }
			
				//start
			$.ajax({
         type: "post",
         url: "insert.php",
		 data: 	
		 {
			 number:i+1,
			 score:questionscore,
			 quiz:"<?php echo $_GET['id']?>"
			 },
         success: function(data){
              
         }
});
			
			//end
			
            output = output + '<p>Question ' + (i + 1) + ' ' + questionResult + '</p> ';
        }
					//start
				
			$.ajax({
				type: "post",
				url: "insert1.php",
			data: 	
			{
				teacher:"exam",
				score:correct,
				quiz:"<?php echo $name1 ?>"
			},
				success: function(data){
				
				}
			});
// end
        output = output + '<p>You scored ' + correct + ' out of ' + lengthofobject + '</p><br><br clear="all"><input type="button" value="Back to Main Menu" onclick="window.location=\'exam.php\'" class="btn btn-primary"> ';
        document.getElementById("quizContent").innerHTML = output;
		
    } else {
        //console.log('not answered');
    }
}

function checkPage(i) {
    /// add remove disabled buttons if there are no more questions in que
    if (curPage == 0) {
        btnPrevious.classList.add("hide");
    } else {
        btnPrevious.classList.remove("hide");
    }
    if ((curPage + 1) < (lengthofobject)) {
        btnNext.classList.remove("hide");
    } else {
        btnNext.classList.add("hide");
        btnFinish.classList.remove("hide");
    }
    myHeader.innerHTML = data.quizcontent[curPage].question;
	newimage.src = data.quizcontent[curPage].image;
    for (var i = 0; i < possibleAnswers; i++) {
        var curNode = myQuestion.children[i];
		console.log(data.quizcontent[curPage]["a"+(i+1)]);
        curNode.childNodes[1].innerHTML = capitalise(data.quizcontent[curPage]["a"+(i+1)]);
        //check if answered already
        if (myAnswers[curPage] == (i + 1)) {
            curNode.classList.add("selAnswer");
        } else {
            curNode.classList.remove("selAnswer");
        }
    }
    ///update progress bar
    var increment = Math.ceil((curPage) / (lengthofobject) * 100);
    progressBar.style.width = (increment) + '%';
    progressBar.innerHTML = (increment) + '%';
}

function moveBack() {
    if (curPage > 0) {
        curPage--;
        checkPage(curPage);
    } else {
        //console.log('end of quiz Page ' + curPage);
    }
}

function capitalise(str) {
    return str.substr(0, 1).toUpperCase() + str.substr(1);
}


//end quiz
	
		var a=0;
		var b=0;
		var c = 0;
	if(initialized)
		return; // if yes, then do not initialize everything again
	/*
		(1) prepare the pico.js face detector
	*/
	var update_memory = pico.instantiate_detection_memory(5); // we will use the detecions of the last 5 frames
	var facefinder_classify_region = function(r, c, s, pixels, ldim) {return -1.0;};
	var cascadeurl = 'https://raw.githubusercontent.com/nenadmarkus/pico/c2e81f9d23cc11d1a612fd21e4f9de0921a5d0d9/rnt/cascades/facefinder';
	fetch(cascadeurl).then(function(response) {
		response.arrayBuffer().then(function(buffer) {
			var bytes = new Int8Array(buffer);
			facefinder_classify_region = pico.unpack_cascade(bytes);
			console.log('* cascade loaded');
		})
	})
	/*
		(2) get the drawing context on the canvas and define a function to transform an RGBA image to grayscale
	*/
	var ctx = document.getElementsByTagName('canvas')[0].getContext('2d');
	function rgba_to_grayscale(rgba, nrows, ncols) {
		var gray = new Uint8Array(nrows*ncols);
		for(var r=0; r<nrows; ++r)
			for(var c=0; c<ncols; ++c)
				// gray = 0.2*red + 0.7*green + 0.1*blue
				gray[r*ncols + c] = (2*rgba[r*4*ncols+4*c+0]+7*rgba[r*4*ncols+4*c+1]+1*rgba[r*4*ncols+4*c+2])/10;
		return gray;
	}
	/*
		(3) this function is called each time a video frame becomes available
	*/
	var processfn = function(video, dt) {
		// render the video frame to the canvas element and extract RGBA pixel data
		ctx.drawImage(video, 0, 0);
		var rgba = ctx.getImageData(0, 0, 640, 480).data;
		// prepare input to `run_cascade`
		image = {
			"pixels": rgba_to_grayscale(rgba, 480, 640),
			"nrows": 480,
			"ncols": 640,
			"ldim": 640
		}
		params = {
			"shiftfactor": 0.1, // move the detection window by 10% of its size
			"minsize": 100,     // minimum size of a face
			"maxsize": 1000,    // maximum size of a face
			"scalefactor": 1.1  // for multiscale processing: resize the detection window by 10% when moving to the higher scale
		}
		// run the cascade over the frame and cluster the obtained detections
		// dets is an array that contains (r, c, s, q) quadruplets
		// (representing row, column, scale and detection score)
		dets = pico.run_cascade(image, facefinder_classify_region, params);
		dets = update_memory(dets);
		dets = pico.cluster_detections(dets, 0.2); // set IoU threshold to 0.2
		// draw detections
		for(i=0; i<dets.length; ++i) {
			// check the detection score
			// if it's above the threshold, draw it
			// (the constant 50.0 is empirical: other cascades might require a different one)
			if(dets[i][3]>50.0)
			{
				b = 0;
				a +=1;
				c=0;
			document.getElementById('message').innerHTML = '';
				ctx.beginPath();
				ctx.arc(dets[i][1], dets[i][0], dets[i][2]/2, 0, 2*Math.PI, false);
				ctx.lineWidth = 3;
				ctx.strokeStyle = 'red';
				ctx.stroke();
			} else {
				b +=1;
				c=0;
				if(b>=30) {
			document.getElementById('message').innerHTML = 'Please Stay Focus on your exam';	
				} else {
			document.getElementById('message').innerHTML = '';			
				}
			a = 0
			if(b == 300) {
				alert("First warning! Please stay focus and don't look around");
			}
			}
		}
		c+=1;	
			
			if(c==300) {
				alert("No face detected for a certain time. The exam will now close");
			window.location='face.php?id=<?php echo $_GET["id"] ?>';
			return false;
			}
			if(c>=20){
				document.getElementById('message1').innerHTML = '<h3 style="color:red">No Face Detected</h3>';	
			} else {
				document.getElementById('message1').innerHTML = '';	
			}
	}
	/*
		(4) instantiate camera handling (see https://github.com/cbrandolino/camvas)
	*/
	var mycamvas = new camvas(ctx, processfn);
	/*
		(5) it seems that everything went well
	*/
	initialized = true;

}
setTimeout(button_callback,1000);



navigator.getMedia = ( navigator.getUserMedia || // use the proper vendor prefix
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

navigator.getMedia({video: true}, function() {
  // webcam is available
}, function() {
  //alert('No webcam available');
  //window.location='exam.php';
});
    </script>
  </body>
</html>
