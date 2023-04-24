var acs = new Array();
	var cs;
fetch('alluser.txt')
  .then(response => response.text())
  .then((data) => {
//    console.log(data);
	document.getElementById('acb').value = data;
  })
  cs = document.getElementById('acb').value;
  
if(cs == '')
{

 
	//alert("sample");
	setTimeout(function() {
		 cs = document.getElementById('acb').value;
		var str_array = cs.split(',');
for(var i = 0; i < str_array.length; i++) {
   /// Trim the excess whitespace.
   //str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
   // Add additional code here, such as:
   //alert();
   acs.push(str_array[i]);
   //alert("samplec");
  //alert(str_array[i]);
}
		}, 500);
}
 else {
	var str_array = cs.split(',');
for(var i = 0; i < str_array.length; i++) {
   /// Trim the excess whitespace.
   //str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
   // Add additional code here, such as:
   //alert();
   //acs.push();
 // alert(str_array[i]);
}
}
const video = document.getElementById('video')
Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('/models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
  faceapi.nets.ageGenderNet.loadFromUri('/models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('/models'),
  faceapi.nets.faceExpressionNet.loadFromUri('/models')
]).then(startVideo)

function startVideo() {
	
	
	
  navigator.getUserMedia =  navigator.getUserMedia ||
    navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia ||
    navigator.msGetUserMedia;
  
    if (navigator.getUserMedia) {
      navigator.getUserMedia({ audio: true, video: { } },
         function(stream) {
            var video = document.querySelector('video');
            video.srcObject = stream;
            video.onloadedmetadata = function(e) {
              video.play();
            };
         },
         function(err) {
            console.log("The following error occurred: " + err.name);
         }
      );
   } else {
      console.log("getUserMedia not supported");
   }
}

video.addEventListener('play', async() => {
  const canvas = faceapi.createCanvasFromMedia(video)
  document.body.append(canvas)
  video.width=720
  video.height=560
  const displaySize = { width: video.width, height: video.height }
  faceapi.matchDimensions(canvas, displaySize)
  const labeledFaceDescriptors = await loadLabeledImages()
  const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
  document.body.append('Loaded')
  document.getElementById('loaded').value = 'Loaded';
  setInterval(async () => {
    
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptors().withAgeAndGender().withFaceExpressions();
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
    results.forEach((result, i) => {
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
     
      resizedDetections.forEach(result => {
      const { age, gender, genderProbability,expression } = result
      document.getElementById('load').innerHTML="";
      new faceapi.draw.DrawTextField(
        [

         // `Age: ${faceapi.round(age, 0)} years`,
          //`Gender: ${gender} (${faceapi.round(genderProbability)})`
        ],
        result.detection.box.bottomRight
      ).draw(canvas)
    })
      faceapi.draw.drawFaceExpressions(canvas, resizedDetections)
      const box = resizedDetections[i].detection.box
      const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
      drawBox.draw(canvas)
	  
	  var ac = result.toString();
	  if(document.getElementById('loaded').value == 'Loaded')  {
		  //parent.document.getElementById('startq').value = "lightblue";
var url_string = window.location.href; 
var url = new URL(url_string);
var username = url.searchParams.get("username");
//console.log(c);

//document.getElementById('sr').src = "https://stcbauanadmission.tech/stc/view.php?id="+ac+"&username="+username;
document.getElementById('sr').src = "http://localhost/stc/view.php?id="+ac+"&username="+username;
//	  document.getElementById('sr').src = "localhost/stc/view.php?id="+ac;
	  }
    })
  }, 100)
})

function loadLabeledImages() {
	//start
	
  
	
//	alert(acs);
	
	//end
  //const labels = ['sa','bs','a@a.com','b@b.com','ck']
  //await delay(500);
  const labels = acs
  console.log(labels);
  return Promise.all(
    labels.map(async label => {
      const descriptions = []
      for (let i = 2; i <= 3; i++) {
        const img = await faceapi.fetchImage(`/labeled_images/${label}/${i}.jpg`)
        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      }

      return new faceapi.LabeledFaceDescriptors(label, descriptions)
	  document.body.append(label, descriptions)
    })
  )
}

//ssql

//var mysql      = require('mysql');
//var connection = mysql.createConnection({
//  host     : 'localhost',
//  user     : 'root',
//  password : '',
//  database : 'stc'
//});
 
//connection.connect();
 
//connection.query('SELECT * FROM login', function (error, results, fields) {
//  if (error) throw error;
//  console.log('The solution is: ', results[0].solution);
//});
 
//connection.end();

//end sql

window.onerror = function () {

   parent.location.reload();
    return true;
}