<?php
//session_start();
$user='root';
$pass='';
$server='localhost';
try {
	$con = mysqli_connect($server,$user,$pass);
mysqli_select_db($con, 'demo');
} catch (Exception $e) {
	echo "error".$e->getMessage();
}

?>