<?php
include_once("config.php");
$user="umair@xyz.com";
$pass="12345";
$tablename="login";
$Q1="create table if not exists  $tablename( email varchar(50),pass varchar(50))";
$res=$con->query($Q1);
if($res!=0)
{
    $Q1="INSERT INTO `login`(`email`, `pass`) VALUES ('$user','$pass')";
    $res=$con->query($Q1);   
}
$Q1="select * from  $tablename limit 1";
$row=$con->query($Q1); 
while($re = mysqli_fetch_assoc($row))
{
    $user=$re['email'];
    $pass=$re['pass'];
}
if(isset($_GET['submit']))
{
    session_start();
$em=$_GET["Email"];
$pa=$_GET["password"];
if($em!=$user||$pa!=$pass)
{
    $_SESSION["errorMessage"] = "Invalid Credentials";
    header("Location: login.php");
   
}else if($em==$user&&$pa==$pass)
{
    $_SESSION["admin"]="loged";
    header("Location: inde.php");
}



}
?>