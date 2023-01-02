<?php
session_start();


// $db = new PDO('mysql:dbname=demo;host=localhost','root','');
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
 $nom=$_POST['nom'];
 $mat=$_POST['matricule'];
 $div=$_POST['division'];
 $tel=$_POST['tel'];
 $rib=$_POST['rib'];
 $dat=$_POST['dat'];
 $tit=$_POST['titre'];

  $reg=$db->prepare("INSERT INTO reponsep (nom,matricule,division,tel,rib,dat,file,titre) VALUES('$nom','$mat','$div','$tel','$rib','$dat','$pname','$tit')");
       if($reg->execute()){
        echo "upload successful";
        header('Location:userspage.php');
    }
    else{
    	echo "error";
    }
?>