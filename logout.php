<?php
session_start();
//new SESSION();
session_unset();
session_destroy();
/*unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['role']);*/
 header('Location:login.php');

?>