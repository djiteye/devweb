 <?php

session_start();


/*$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');*/
include 'connecter.php';
  

    $usern=$_POST['username'];
    $pass=$_POST['password'];
    $rol=$_POST['role'];
   
    $s= "SELECT * from user where username='$usern' && password='$pass' && role='$rol'";
    $result=mysqli_query($con,$s);
    
    $num=mysqli_num_rows($result);
  
    if($num == 1){
        switch ($rol) {
            case 'admin':
                $_SESSION['username']=$usern;
                 $_SESSION['password']=$pass;
                  $_SESSION['role']=$rol;
                header('Location: administrateur/adminpage.php');


                exit();
                break;
            
            default:
                $_SESSION['username']=$usern;
                 $_SESSION['password']=$pass;
                  $_SESSION['role']=$rol;
                header('Location: utilisateur/userspage.php');
                exit();
                break;
        }
        
   
        
    }else{
        echo "username or password or role incorect";
        header('Location: login.php');

    }


?>