<?php
session_start();?>
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
      .bar .list:not(:nth-child(3)) {
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
      <li class="list" id="hbtn" onclick="prod()">PRODUCTS</li>
      <li class="list" id="hbtn" style="border-bottom: 1px solid" onclick="about()">ABOUT US</li>
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

  <div class="mbodya">
    <div class="maintext">
      GET TO KNOW US.
    </div>
    <div class="detail">
      <div id="innerd" >
        <h3 style="color: red;">EQUIPMENTS
        </h3>
        <br>

        A basic set-up, including essentials such as a bench, some dumbbells, and resistance bands, can still provide a
        great workout And all of these products are available in our store you can buy them on sale from us.
      </div>
      <div id="innerd" >
        <h3 style="color: red;">
          SUPPLEMENTS
        </h3>
        <br>
        At Pump House, we aim in changing lives for all Pakistanis and bring about a healthy change in all teens and
        adults. We are more than just an online fitness store in Pakistan. We strive to motivate all who are near us to
        bring a positive change in Pakistan by being your advisor, nutritionist and support group. Join and help change
        the world you live in.
      </div>
      <div id="innerd" >
        <h3 style="color: red;">ONLINE TRAINING</h3>
        <br>
        Pump House is one of the largest online platform to hire a professional personal trainer at home, qualified in
        home fitness trainers and best health coaches online for men & women in the country. We offer a wide range of
        health and fitness services weight training,
      </div>
    </div>

  </div>
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
    <div id="fottxt">Pump House Family:
      <br>
      Umair & Hassan
      <br>
      Copyright 2022 Pump House
    </div>
  </div>
</body>

</html>