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
	mysql_query("UPDATE login SET chance = '5' WHERE username = '$username'");
	$_SESSION['exam'] = $_GET['id'];
	
$number = 'No Face Detected';
$score = 'No Face Detected';
$quiz = $_GET['id'];


$result2a = mysql_query("SELECT * FROM results1 WHERE student='$username' AND quiz = '$quiz' GROUP BY quiz");
$count2a=mysql_num_rows($result2a);

if($count2a>0) {
	//echo '<script>alert("You already take")</script>';
	echo '<script>window.location="exam.php"</script>';
}

//$save1=mysql_query("INSERT INTO results1 (number,student,quiz,score) VALUES ('$number','$username','$quiz','$score')");
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
  <!--<body  oncut="return false" onpaste="return false"  oncopy="return false" onload="window.open('http://localhost:3000', '_blank').focus(); return false;"> -->
  <body onunload="return refresh()">
<script>

function refresh() {
 
}
//window.onbeforeunload = function(){
    //return 'You have made some changes which you might want to save.';

  //document.getElementById("demo").innerHTML = text;
//}
</script>
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
              <a href="exam.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Online Examination</a>
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
												$minutes = $row11a['minutes'];
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
		<td valign="top" width="100%">
		<center>
		<!-- start -->
		<script>
		 window.resizeTo(screen.width-300,screen.height-500)   

		</script>
<table>
	<tr>
		<td width="80%" valign="top">
		<div id="waitcontent" style="border:1px solid #000;padding:20px">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center><h2>Please wait while face recognition and quiz is loading</h2>
			<br><br><br><br><br><br><br>
		</div>
		<div id="quizcontent" style="display:none">
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
</div>
		<!-- end -->
</td>
<td valign="top">
<style>
#ten-countdown {
    /* text-align: center; */
    border: 5px solid #004853;
    display:inline;
    padding: 5px;
    color: #004853;
    font-family: Verdana, sans-serif, Arial;
    font-size: 40px;
    font-weight: bold;
    text-decoration: none;
}
</style>
<center>
<div id="ten-countdown" style="display:none"></div>
<br><br><input type="hidden" id="startq" onblur="startquiz()">
<iframe id="iframeid" width="500px" height="450px" src="https://face.stcadmission.tech/?username=<?php echo $username ?>" title="YouTube video player" allow="accelerometer; camera *;microphone *; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen scrolling="no"  frameBorder="0"></iframe>

</td>
	</tr>
<table>
<div style="width:100%;background:#FFF;padding:10px;height:100px;">
<div id="logs" style="font-size:30px"></div>
</div>
<br><br><br><br><br><br><br><br>

          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sta Teresa College  - 2022</span>
        
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
<!--
		<script src="./js/camvas.js"></script>
		<script src="./js/pico.js"></script>
        <script src="./js/index.js"></script>
		<canvas width="640" height="480"></canvas>
		<div id="message"></div>
		<div id="message1"></div>
		</td>
		-->

    <script>
//check


function startquiz() {
var initialized = false;

//start quiz

      
// JSON Document
data = {"quizcontent": [
<?php
$idab = $_GET['id'];

			include('../connect.php');
			$result3 = mysql_query("SELECT * FROM questions WHERE questionid = '$idab'");
			while($row3 = mysql_fetch_array($result3))
			{
				
		echo '{"question": "'.$row3["question"].'", "image": "'.$row3['image'].'", "correct": '.$row3["corans"].', "a1":"'.$row3["ansa"].'", "a2":"'.$row3["ansb"].'","a3":"'.$row3["ansc"].'","a4":"'.$row3["ansd"].'"},		';
				
			}
?>
    ],
	
};
//alert("<?php echo $name1 ?>");


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
	if(data.quizcontent[curPage].image == '') {
		
	} else {
		myHeader.innerHTML = myHeader.innerHTML+ '<br><img src="../../uploads/'+data.quizcontent[curPage].image+'" style="width:300px;height:250px">';
	}
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


countdown( "ten-countdown", <?php echo $minutes ?>, 0 );

//end quiz
}

var auto_refresh = setInterval(
function ()
{
$('#logs').load('s.php');
//alert();
//if(document.getElementById('startq').value == 'Start') {
	
//}
}, 100); // refresh every 10000 milliseconds

	

function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
			window.onbeforeunload=function(){null}

            element.innerHTML = "Time is up!";
			//alert();
				window.location='face.php?id=<?php echo $_GET["id"] ?>';
				throw new Error('This is not an error. This is just to abort javascript');
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
	
	
//get data

//end get data
}

    </script>
	<script type="text/javascript">
</script>			

  </body>
</html>
