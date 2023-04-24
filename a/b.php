<!doctype html>
<html>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
  <center>
   <h1 style="color:#FFF">Please click 4 times the capture image
   <br>Status:<span id="status">Please wait</span>
   </h1>
   
      <!-- check face -->
	<style>
	
    canvas {
      position: absolute;
	  
    }
	</style>
  
  <video id="video" width="600" height="400" autoplay muted></video>
	
	<!-- end check -->
  <div id="my_camera" style="display:none"></div>
    
    <!-- First, include the Webcam.js JavaScript Library -->
    <script type="text/javascript" src="../webcam.js"></script>
    
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 600,
            height: 460,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
    </script>
    
    <!-- A button for taking snaps -->
    <form>
        <input type="button" value="Capture Image" onclick="take_snapshot()" class="button" id="cap1" style="display:none">
    </form>
    <input type="hidden" value="0" id="click1">
    <div id="results" style="width:90%">Your captured image will appear here...</div>
    <!-- Code to handle taking the snapshot and displaying it locally -->
    <script language="JavaScript">
        function take_snapshot() {
            // take snapshot and get image data
			
            Webcam.snap( function(data_uri) {
                // display results in page
            var a = document.getElementById('click1').value;    
			if(a == '') {
				document.getElementById('click1').value = parseInt(0);
			}
			
                a = parseInt(a) + parseInt(1);
				document.getElementById('click1').value  = parseInt(a);
				//alert(a);
				if(a == 1){
					Webcam.upload( data_uri, 'saveimage.php?id=<?php echo $_GET["id"] ?>&num='+a+'', function(code, text) {
                    document.getElementById('results').innerHTML = 
                    '<h2>Here is your image:</h2>' + 
                    '<img src="'+text+'"/>';
                } );  
				}
                Webcam.upload( data_uri, 'saveimage.php?id=<?php echo $_GET["id"] ?>&num='+a+'', function(code, text) {
                    document.getElementById('results').innerHTML = 
                    '<h2>Here is your image:</h2>' + 
                    '<img src="'+text+'"/>';
                } );  
						var c = document.getElementById('click1').value;
	if(c == 0) {
		window.location.reload();
	}
	if(c == '') {
		window.location.reload();
	}
if(a>=4)				 {
	alert("All required images has been captured");
	window.location='../index.php';
}
            } );
        }

	
    </script>
    
 
   
    
  <script defer src="face-api.min.js"></script>
  <script defer src="script.js"></script>
					</div>
</body>
</html>