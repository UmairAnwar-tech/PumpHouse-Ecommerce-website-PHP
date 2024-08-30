
<?php
include_once("config.php");
if(isset($_POST['submit']))
{
    $id=$_POST['Email'];
    $Q1="UPDATE `login` SET `pass`='987654' ";
$chec= $con->query($Q1);
 if($chec)
 {

    header("location:home.php");

 }else
 {

    header("location:forgetpass.php");
 }

}?>
