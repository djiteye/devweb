<?php
session_start();

  //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
        // mysqli_select_db($con, 'demo');
/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
include '../connecter.php';
   if(isset($_GET['file_id'])){
   $id=$_GET['file_id'];
   $db="SELECT * from reponseev Where id=$id";
  $result=mysqli_query($con,$db);
    $file=mysqli_fetch_assoc($result);
 
 $filePath= "../file/".$file['file1'];
 if(file_exists($filePath)){
    header('Content-Type: '.$file['file'].'/pdf');
 	
 	header('Content-Description:File Transfer');
 	header('Content-Disposition: attachement; filename:'.basename($filePath));
 
  header('Expires:0');
  header('Cache-Control: must-revalidate');
    header('Pragma:public');
  header('Content-Length:'. filesize('../file/'. $file['file1']));
 

 	readfile('../file/'.$file['file']);
  $newCount=$files['downloads']+1;
   $updatQuery="UPDATE files SET downloads=$newCount Where id=$id";
   mysqli_query($con,$updatQuery);
 	exit();
 }else{
 	echo "file not exit";
 }
}