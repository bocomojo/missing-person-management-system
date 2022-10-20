<?php
session_start();
if($_SESSION['username']){
    
}else{
    // header('Location:../index.php');
    header('Location:login-form-03/login.php');
    //debug this part
}
?>