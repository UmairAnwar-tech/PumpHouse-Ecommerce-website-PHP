
<?php
$dbname="Pumphouse";
$host="localhost";
$username="root";
$pass="";
$tableName="product";

$con=mysqli_connect($host,$username,$pass);
if($con)
{
    $Q1="create database if not exists $dbname";
    if($con->query($Q1));
    {
    $Q1="use $dbname";}
    if($con->query($Q1));
    {
        $Q1="create table if not exists $tableName (id int(3) Unique AUTO_INCREMENT, prodname varchar(50) Unique,price int,prodimg varchar(100),proddes varchar(1000))";
        $con->query($Q1);
    }
    
    
}
?>


