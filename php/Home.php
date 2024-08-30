<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="../cssfiles/home.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="../jsfiles/main.js"></script>
  <style>
    @media screen and (min-width:350px)and (max-width: 750px) {
  .bar .list:not(:first-child) {
    display: none;}}
  </style>
  <title>Document</title>
</head>

<body onload="showSlides()">
  <div id="head">
    <div id="logo">
      <img id="lgpic" src="../pics/pump.png" alt="" onclick="logo()" />
    </div>
    <div class="socil">
      <div class="slogo">
        <i class="bi bi-facebook" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-whatsapp" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-instagram" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-linkedin" id="hbtn"></i>
      </div>
    </div>
  </div>
  <nav>
    <ul class="bar" type="none" id="mybar">
      <li class="list" id="hbtn" style="border-bottom: 1px solid" onclick="home()">
        HOME
      </li>
      <li class="list" id="hbtn" onclick="prod()">PRODUCTS</li>
      <li class="list" id="hbtn" onclick="about()">ABOUT US</li>
      <li class="list" id="hbtn" onclick="contact()">CONTACT US</li>
     
                 <?php 
                 if(isset($_SESSION['admin'])) {
                 
                    
                 ?>
                 <li class="list" id="hbtn" onclick="logout()">LOG OUT</li>
                 <?php
                 }?>
                 <?php
                  if(!isset($_SESSION['admin']))
                 { ?>
                  <li class="list" id="hbtn" onclick="login()">LOGIN</li>
                 <?php
                 }?>
   
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </ul>
  </nav>
</div>
    
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="../pics/mpic1.png" style="width:100%">
   
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <img src="../pics/mpic2.png" style="width:100%">
   
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <img src="../pics/mpic3.png" style="width:100%">
   
  </div>
  <div class="mySlides">
    <div class="numbertext">4 /4 </div>
    <img src="../pics/mpic4.png" style="width:100%">
   
  </div>
  </div>
  <div id="intro" style="color: black;">
    House of all essential things for fitness and Health
    <div id="mainl">
      <div id="pum" style="color:black"><i style="color: red">P</i> ump</div>
      <div id="hou" style="color:black"><i style="color: red">H</i> ouse</div>
    </div>
  </div>
  <div id="mbtn">
    <input type="button" value="New Arrival" id="narrival" class="btn" onclick="prod()" />
    <input type="button" name="Explore" id="explore" value="Explore" class="btn" onclick="about()" />
  </div>
  <h3 style="color: red; text-align:center;">Latest Products</h3>
  <div id="prodmain" class="row">
<?php
$Q1="Select * from product ORDER BY id DESC limit 3";
$rhome=$con->query($Q1);

?>
  <?php while($in=mysqli_fetch_assoc($rhome))
  {
    echo("<div class='col-md-4'>");
  echo("<img src=".$in['prodimg']."  class='product'>" );
  echo" <br>";
   echo ($in['prodname']);
   echo"<br>";
   echo($in['price']);
   echo"<br>"; 
   if(isset($_SESSION["admin"]))
   {
    echo "<div>";
    echo ("<a href=\"delete.php?id=$in[id]\" class='btn' style='background-color:B22222; color:white;'>Delete</a>");
    echo ("<a href=\"update.php?id=$in[id]\" class='btn' style='background-color:66CDAA;'>Update</a>");
    echo "</div>";

   }else
   {
   echo ("<a href=\"prodetail.php?id=$in[id]\" class='btn'>Buy Now</a>");
   }
 echo "</div>";



  }?>

  
    
  </div>
  <div class="footer">
    <div id="footsocial">
      <div class="slogo">
        <i class="bi bi-facebook" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-whatsapp" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-instagram" id="hbtn"></i>
      </div>
      <div class="slogo">
        <i class="bi bi-linkedin" id="hbtn"></i>
      </div>
    </div>
    <div id="fottxt">
      Pump House Family:
      <br />
      Umair & Hassan
      <br />
      Copyright 2022 Pump House
    </div>
  </div>
</body>

</html>