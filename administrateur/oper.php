<?php
session_start();


 //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
        // mysqli_select_db($con, 'demo');
          //$stmt=$db->prepare("SELECT * from evenement");
         // $stmt->execute();
//mysqli_select_db($con, 'demo');

 

 $pname= $_FILES["file"]["name"];
 $tname= $_FILES["file"]["tmp_name"];
 $sname= $_FILES["file"]["size"];
 $tyname= $_FILES["file"]["type"];
 $upload_dir="../file/".$pname;
 move_uploaded_file($tname,$upload_dir);
 $com=$_POST['commentaire'];
 $titre=$_POST['titre'];
 $dat=$_POST['date'];
 if(!empty($com) && !empty($titre) && !empty($dat)){
  $reg=$db->prepare("INSERT INTO evenement (file,commentaire,titre,dat) VALUES('$pname',?,?,'$dat')");
       if($reg->execute(array($com,$titre))){
        echo "upload successful";
        header('Location:adminpage.php');

    }
    else{
    	echo "error";
    }
}else{
     echo "veillez renseigner tous les champs";
}
?>