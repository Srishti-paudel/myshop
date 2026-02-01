<?php
if(!$_POST['email']||!$_POST['password'])
    header("Location:login.php");
$email=$_POST['email'];
$password=$_POST['password'];
if($email=="admin@gmail.com" && $password=123)
    {
          header("Location:dashboard.php");
    }
    else{
        header('Location:login.php');
    }
?>