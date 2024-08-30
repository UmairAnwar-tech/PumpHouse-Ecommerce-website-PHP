<?php


include_once("config.php");
$id = $_GET['id'];

$Q1="select * from product where id =$id";
$result=$con->query($Q1);
$res=mysqli_fetch_assoc($result);
$img=$res['prodimg'];
$name=$res['prodname'];
$des=$res['proddes'];
$price=$res['price'];
session_start();

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
            .bar .list:not(:nth-child(2)) {
                display: none;
            }
        }
    </style>
    <title>Document</title>
</head>


<body>
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
            <li class="list" id="hbtn" onclick="home()">
                HOME
            </li>
            <li class="list" id="hbtn" onclick="prod()" style="border-bottom: 1px solid">PRODUCTS</li>
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

    <?php

    echo("<div class='product-detail'>");
        echo("<div class='p1'>");
            echo("<div class='name-pic'>");
                echo("<h1>$name</h1>");
                echo("<img src='$img '>");
           echo ("</div>");
           echo ("<div class='details'>");
               echo(" <p>Product-Price : $price</p>");
               echo("<p>Product-Code:$id</p>"); 
              echo(" <p>Product in Stock: Yes</p>")  ;
               echo("<p>Product-Discount: 2%</p>") ;
                echo("<input type='button' value='Buy Now' class='btn'>");
              
echo(" </div>");
           
echo(" </div>");
echo(" <div class='des '>");
       echo(" <h1 style='color: red;  '>Product Description </h1>");
         echo(" <p>
             $des
         </p>")  ;
           
         echo(" </div>");
           
         echo(" </div>");
?>
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
        <div id="fottxt">Pump House Family:
            <br>
            Umair & Hassan
            <br>
            Copyright 2022 Pump House
        </div>
    </div>
</body>

</html>