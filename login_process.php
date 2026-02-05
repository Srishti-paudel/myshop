<?php
if(empty($_POST['email'])||empty($_POST['password']))
    {
    header("Location:login.php");
    }
    $email=$_POST['email'];
$password=$_POST['password'];
  $host="localhost";
  $u="root";
  $pw="";
  $db="waradly";
  $con=mysqli_connect($host,$u,$pw,$db);
  if(!$con){
    die("Error".mysqli_connect_error);
  }
print_r($row);die;
$query="select * from users where email='$email'";
$result= mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
if(password_verify($password,$row["password"])){
    header ("Location:dashboard.php");
}
else{
    header ("Location:login.php");
}
?>