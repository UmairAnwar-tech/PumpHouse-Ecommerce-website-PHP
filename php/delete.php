<?php


include_once("config.php");
$id = $_GET['id'];

$Q1="delete from product where id =$id";
$result=$con->query($Q1);
header("location:inde.php");

?>