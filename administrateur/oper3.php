<?php

session_start();


//$db = new PDO('mysql:dbname=demo;host=localhost','root','');
  include '../connexion.php';
   $id=$_POST['file_id'];
echo "id = ".$id;
 $com=$_POST['description'];
 $titre=$_POST['titre'];
 $prix=$_POST['montant'];
 $ch=$_POST['ch'];

 $pname= $_FILES["file"]["name"];
 $tname= $_FILES["file"]["tmp_name"];
 $sname= $_FILES["file"]["size"];
 $tyname= $_FILES["file"]["type"];
 $upload_dir="../file/".$pname;
 move_uploaded_file($tname,$upload_dir);
 //$pj=$_POST['pj'];


  $reg=$db->prepare("UPDATE validprime SET titre=?, description=?, fr=?, montant='$prix', file='$pname' WHERE id=$id");
       if($reg->execute(array($titre,$com,implode("|",$ch)))){
        echo "upload successful";
        header('Location:adminpage.php');

    }
    else{
     echo "error";
    }


?>