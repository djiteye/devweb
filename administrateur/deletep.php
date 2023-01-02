<?php
session_start();

  //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
        // mysqli_select_db($con, 'demo');
/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
include '../connecter.php';
   if(isset($_GET['file_id'])){
   $id=$_GET['file_id'];
   $db="SELECT * from validprime Where id=$id";
  $result=mysqli_query($con,$db);

    $num=mysqli_num_rows($result);
 
 //$filePath= "../file/".$file['file'];
 if($num==1){
  
 
   $deleteQuery="DELETE From validprime Where id=$id";
   mysqli_query($con,$deleteQuery);
    //unlink($filePath);
    header('Location:adminpage.php');
 	   //exit();
 }else{
 	echo "prime not exit";
 }
}
?>