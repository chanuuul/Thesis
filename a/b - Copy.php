<!doctype html>
<html>

		<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
html, body {
	height:100vh;
	background:url('../img/banner.jpg');
	background-size:cover;
	background-attachment:fixed;
	}
</style>
</head>
<body>
<img class="for_transparent" src="./../img/logo.png" width="100px" height="100px" alt="">
<br>

<style>


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
			
			
			<?php
			if(isset($_POST['submit'])){ 
			include('./connect.php');
			$uname = $_POST['username'];
			$sql = mysql_query("SELECT * FROM login WHERE username = '$uname'");
			$count=mysql_num_rows($sql);
if($count >0) {
echo '<script>alert("The username you are trying to registered is already in use");window.location="registeradmission.php"</script>';	
} else {
  $name = $_POST['name']; 
  $address = $_POST['address']; 
  $contact = $_POST['contact']; 
  $school= $_POST['school']; 
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $type = 'admission';
	$save1=mysql_query("INSERT INTO login (username,password, type,name,address,contact,school) VALUES ('$username','$password','$type','$name','$address','$contact','$school')");
  echo '<script>alert("You have been registered. Press OK to continue");window.location="admission.php"</script>';
}   
			}
			?>
			<style>
			 h2, h3 { margin-top:0; }
        form { margin-top: 15px; }
        form > input { margin-right: 15px; }
        #results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
			</style>
			<center>
			
  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.9.1.js"
    
  ></script>
<div style=" 
			margin-top:100px;
       position: absolute;
       background-color:rgba(0, 0, 0, 0.4);
       padding: 5px;
	   align-items: center;
	   padding:40px;
       color: #FFFFFF;
       font-weight: bold;
	   border-radius:10px;
	   border:3px solid #FFF;
	   width:800px;
	   height:800px;
	   overflow:hidden;
	   top:200px;
	   margin-top:250px;
	   left: 50%;
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);text-align:left;overflow-y:scroll">
   <script >
	//start capture
	function capture() {
		
  var canvas = document.getElementById("canvas");
  var video = document.querySelector("video");
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  canvas.getContext("2d").drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
  
	//alert(canvas.toDataURL("image/png").replace("image/png", "image/jpg"));
	var ac = canvas.toDataURL("image/png").replace("image/png", "image/jpg");
            var a = document.getElementById('click1').value;    
			if(a == '') {
				document.getElementById('click1').value = parseInt(0);
			}
  document.getElementById('a1').src = "../saveimage.php?id=<?php echo $_GET['id'] ?>&num="+ac+"";
  //posy
  
 Webcam.upload( ac, 'saveimage.php?id=<?php echo $_GET["id"] ?>&num='+a+'', function(code, ac) {
                    document.getElementById('results').innerHTML = 
                    '<h2>Here is your image:</h2>' + 
                    '<img src="'+ac+'"/>';
                } );
  
  //end post
  a = parseInt(a) + parseInt(1);
				document.getElementById('click1').value  = parseInt(a);
				if(a>=4)				 {
	//alert("All required images has been captured");
	//window.location='index.php';
}
}



	
    </script>
  <center>
  <h3 style="color:#FFF">Please click 4 times the capture image</h1>
  <!-- start -->
  <style>
  
    .canvas {
      position: absolute;
    }
  </style>
  <script defer src="./face-api.min.js"></script>
  <script defer src="./script.js"></script>
    <script type="text/javascript" src="../webcam.js"></script>
  <!-- end -->
  <iframe id="a1"></iframe>
    <video id="video" width="720" height="560" autoplay muted></video>
	

    <form>
        <input type="button" value="Captute Image" onClick="capture()" id="cap">
    </form>
    <input type="text" value="0" id="click1">
	<center><canvas id="canvas" class="canvas" style="display:none">Your captured image will appear here...</canvas>
    <div id="results" style="width:90%"></div>
	
    <!-- Code to handle taking the snapshot and displaying it locally -->
   
    
					</div>
</body>
</html>