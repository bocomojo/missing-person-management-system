<?php session_start();
if($_SESSION['username']){
    header('Location:admin/dashboard.php');
}else{
    // header('Location:../index.php');
    header('Location:login-form-03/login.php');
}
    
?>
