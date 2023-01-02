<?php

session_start();


/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
  //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
    $usern=$_POST['username'];
    $ms=$_POST['msg'];
   if(!empty($usern) && !empty($ms)){
        $reg=$db->prepare("INSERT INTO information (pseudo,message) VALUES('$usern',?)");
        
        if($reg->execute(array($ms))){
        echo "registration successful";
        header('Location:adminpage.php');
    }else{
        echo "error";
    }
}else{
    echo "veillez renseigner tous les champs";
}


?>