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
 $pname1= $_FILES["file1"]["name"];
 $tname1= $_FILES["file1"]["tmp_name"];
 $sname1= $_FILES["file1"]["size"];
 $tyname1= $_FILES["file1"]["type"];
 $upload_dir1="../file/".$pname1;
 move_uploaded_file($tname1,$upload_dir1);
 $nom=$_POST['nom'];
 $mat=$_POST['matricule'];
 $div=$_POST['division'];
 $tel=$_POST['tel'];
 $rib=$_POST['rib'];
 $dat=$_POST['dat'];
 $tit=$_POST['titre'];

  $reg=$db->prepare("INSERT INTO reponseev (nom,matricule,division,tel,rib,dat,file,file1,titre,action) VALUES('$nom','$mat','$div','$tel','$rib','$dat','$pname','$pname1','$tit','non-valide')");
       if($reg->execute()){
        echo "upload successful";
        header('Location:userspage.php');
    }
    else{
    	echo "error";
    }
?>