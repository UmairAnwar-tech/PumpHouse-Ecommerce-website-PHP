<?php
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
      .bar .list:not(:nth-child(4)) {
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
      <li class="list" id="hbtn" " onclick=" home()">
        HOME
      </li>
      <li class="list" id="hbtn" onclick="prod()">PRODUCTS</li>
      <li class="list" id="hbtn" onclick="about()">ABOUT US</li>
      <li class="list" id="hbtn" onclick="contact()" style="border-bottom: 1px solid">CONTACT US</li>
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

  <div class="mbodyp">
    <h1 style="text-align: center; color: red;">Contact Us</h1>
    <div class="contactus row">
      <div class="form col-md-4">
        <form action="../php/contactus.php" method="get" id="myform" onsubmit="return validate()">
          <div>
            <h6>Name : <input type="text" id="name" class="" name="name"></h6>
            <div class="alert alert-danger" id="errname"></div>
          </div>

<div>
          <h6> Email : <input type="email" name="Email" id="email"></h6>
          </div>
          <div class="alert alert-danger" id="erremail"></div>
          <div>
            <h6>Phone: <input type="tel" name="phone" id="phone"></h6>
            <div class="alert alert-danger" id="errphone"></div>
          </div>

          <h6>Role:
            <input type="radio" checked name="abc" value="Student" >
            <label for="student">Student</label>
            <input type="radio" name="abc" value="Teacher">
            <label for="teacher">Teacher</label>
          </h6>
          <h6>City:
            <select name="city" id="city">
              <option value="lahore">Lahore</option>
              <option value="pindi">Rawalpindi</option>
              <option value="islamabad">Islamabad</option>
              <option value="sialkot">Sialkot</option>
            </select>
          </h6>
          <h6>Message</h6>
          <textarea name="message" id="mesage" cols="24" rows="4"></textarea>
          <div>

            <input type="submit" href="javascript:void(0);" value="Submit" name="submit" class="btn"
              id="hbtn sbtn">
          </div>
        </form>
      </div>
      <div id="admap" class="col-md-8">

        <div id="address">
          <h3 style="color :red " class="row">Our Location</h3>
          Avenue 1, Khayaban-e-Jinnah، Road, Johar Town, Lahore, Punjab
        </div>
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.8186138234537!2d74.26539653928748!3d31.446660156292992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity%20of%20Central%20Punjab!5e0!3m2!1sen!2s!4v1670521729602!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <div id="fottxt">
      Pump House Family:
      <br />
      Umair & Hassan
      <br />
      Copyright 2022 Pump House
    </div>
  </div>
  <script>
    




  </script>
</body>

</html>