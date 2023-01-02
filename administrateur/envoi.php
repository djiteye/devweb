 <?php

session_start();


/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
//$db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';

  

    $usern=$_POST['username'];
    $eml=$_POST['email'];
    $pass=$_POST['password'];
    $rol=$_POST['role'];
    
    $s= $db->prepare("SELECT * from user where username='$usern'");
    //$result=mysqli_query($con,$s);
    $result=$s->execute();
    //$row= mysqli_fetch_array($result);
    $num=mysqli_num_rows($result);
  
    if($num == 1){
        echo "username already taken";
    }else{
        $reg=$db->prepare("INSERT INTO user (username,email,password,role) VALUES(?,?,?,?)");
        //mysqli_query($con, $reg);
        $reg->execute(array($usern,$eml,$pass,$rol));
        echo "registration successful";
        header('Location:addu.php');
    }


?>