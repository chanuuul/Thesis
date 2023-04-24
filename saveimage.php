<?php
//set random name for the image, used time() for uniqueness
$filename =  $_POST['num'] . '.jpg';
//$id =$_GET['id'];
$id = '1';
//$filepath = 'public/labeled_images/';
if (!file_exists('public/labeled_images/'.$id.'/')) {
$filepath=    mkdir('public/labeled_images/'.$id.'/', 0777, true);
} else {
	$filepath = 'public/labeled_images/'.$id.'/';
}
move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
echo $filepath.$filename;
?>