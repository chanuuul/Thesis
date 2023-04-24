<?php 
include('../connect.php');
$id = $_GET['id'];
$username =$_GET['username'];
 $sql1 = "delete from login where username='$username'";
 mysql_query( $sql1);
 $sql1 = "delete from login where uname='$username'";
 mysql_query( $sql1);




my_folder_delete("../../public/labeled_images/".$username."");

function my_folder_delete($path) {
    if(!empty($path) && is_dir($path) ){
        $dir  = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS); //upper dirs are not included,otherwise DISASTER HAPPENS :)
        $files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $f) {if (is_file($f)) {unlink($f);} else {$empty_dirs[] = $f;} } if (!empty($empty_dirs)) {foreach ($empty_dirs as $eachDir) {rmdir($eachDir);}} rmdir($path);
    }
}

$dir = "../../public/labeled_images/".$username."";
//echo $dir;
$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($it,
             RecursiveIteratorIterator::CHILD_FIRST);
foreach($files as $file) {
    if ($file->isDir()){
        rmdir($file->getRealPath());
    } else {
        unlink($file->getRealPath());
    }
}

rmdir($dir);


	echo "<script type=\"text/javascript\">window.alert('Record has been deleted.');window.location.href = 'user.php';</script>"; 		


?>

