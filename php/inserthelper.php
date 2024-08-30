<?php
include_once("config.php");
  if(isset($_POST['submit']))
{
   $name =$_POST['Prodname']; 
$price=$_POST['price'];
$des=$_POST['des'];
$image=$_POST['img'];
$path="../pics/$image";

 
    $Q1="INSERT INTO `product`( `prodname`, `price`, `prodimg`, `proddes`) VALUES ('$name','$price','$path','$des')";
  $res= $con->query($Q1); 
  if($res)
  {
     header("location:inde.php");
 
  }   

}
?>