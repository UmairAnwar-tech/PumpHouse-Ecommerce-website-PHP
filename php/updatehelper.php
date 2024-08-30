<?php
include_once("config.php");

session_start();

    if(isset($_POST['submit']))

{
    $id=$_POST['id'];
    $name =$_POST['Prodname']; 
$price=$_POST['price'];
$des=$_POST['des'];
$image=$_POST['img'];
echo($image);
$path="../pics/$image";
echo($path);
 
    $Q1="UPDATE `product` SET `prodname`='$name',`price`='$price',`prodimg`='$path',`proddes`='$des' WHERE id=$id";
  $res= $con->query($Q1); 
  if($res)
  {
     header("location:inde.php");
 
  }   

}
?>