<?php
//session_start();

$user='root';
$pass='';
/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
try {
	$db = new PDO('mysql:dbname=demo;host=localhost',$user,$pass); 
	
} catch (Exception $e) {
	echo "error".$e->getMessage();
}

?>