<?php

include_once("config.php");
include_once("cookies.php");
$cokname="contus";
if(isset($_COOKIE[$cokname])&&$_COOKIE[$cokname]==2)
{
 
  echo("you have submitted two time");
  echo("<a href='home.php' class='insert'>Go back to home</a>");
 
  
  }
else if($_COOKIE[$cokname]!=2)
{
$tablename="contactus";
$Q1="create table if not exists  $tablename(id int(3) Unique AUTO_INCREMENT, name varchar(50),email varchar(50),phone varchar(50),role varchar(50),city varchar(10),msg varchar(500))";
$res=$con->query($Q1);
if(isset($_GET['submit']))
{
    $name = mysqli_real_escape_string($con, $_GET['name']); 
	$msg = mysqli_real_escape_string($con, $_GET['message']);
	$email = mysqli_real_escape_string($con, $_GET['Email']);
    $phone=$_GET['phone'];
    $role=$_GET['abc'];
    $city=$_GET['city'];
    
    $Q1="INSERT INTO `contactus`(`name`, `email`, `phone`, `role`, `city`, `msg`) VALUES ('$name','$email','$phone','$role','$city','$msg')";
  $res= $con->query($Q1);    
 $va=$_COOKIE[$cokname];
 $va=$va+1;
 setcookie($cname,$va,time()+(86400*30));
 echo($va);
  header("location:home.php");

}
}
?>