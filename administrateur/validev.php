<?php

session_start();


//$db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
  
   $id=$_GET['file_id'];
//echo "id = ".$id;

 //$pj=$_POST['pj'];


  $reg=$db->prepare("UPDATE reponseev SET action='valide' WHERE id=$id");
       if($reg->execute()){
        echo "upload successful";
        header('Location:adminpage.php');

    }
    else{
     echo "error";
    }


?>