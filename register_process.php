<?php
  $host="localhost";
  $user="root";
  $password="";
  $db="waradly";
  $con=mysqli_connect($host,$user,$password,$db);
  if(!$con){
    die("Error".mysqli_connect_error);
  }
echo("datanbase connected");
$username=$_POST["username"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$query="insert into users(username,email,password)values('$username','$email','$password')";
$res=mysqli_query($con,$query);
if($res)
    {
        echo "user Registration successfull";
    }
    else{
        echo "registration failed";
    }