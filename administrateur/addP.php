<?php

session_start();


/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
  
//$db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
    $prime=$_POST['prime'];
   
   if(!empty($prime)){
        $reg=$db->prepare("INSERT INTO prime (titre) VALUES(?)");
        
        if($reg->execute(array($prime))){
        echo "registration successful";
        header('Location:prime.php');
    }else{
        echo "error";
    }
}else{
    echo "veillez renseigner le champs prime";
}


?>