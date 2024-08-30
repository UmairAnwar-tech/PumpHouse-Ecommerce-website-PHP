
<?php
include_once("seslogin.php");
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
            <li class="list" id="hbtn" onclick="contact()" >CONTACT US</li>
            <?php 
                 if(isset($_SESSION['admin'])) {
                 
                    
                 ?>
                 <li class="list" id="hbtn" onclick="logout()" >LOG OUT</li>
                 <?php
                 }?>
                 <?php
                  if(!isset($_SESSION['admin']))
                 { ?>
                  <li class="list" id="hbtn" onclick="login()" style="border-bottom: 1px solid">LOGIN</li>
                 <?php
                 }?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </ul>
    </nav>

    <div class="mbodyl">
        <h1 style="text-align: center; color: red;">LOG IN</h1>
        <div class="login row">
            <div class="form col-md-4">
            <?php 
                    if(isset($_SESSION["errorMessage"])) {
                    
                       
                    ?>
                    <div class="error-message" style="color:red; display:inline "> <?php  echo $_SESSION["errorMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["errorMessage"]);
                    } 
                    ?>
                <form action="seslogin.php" method="get" id="myform" onsubmit="return validate2()">
                    <div>
                        <h6> Email:<input type="email" name="Email" id="email"></h6>
                    </div>
                    <div class="alert alert-danger" id="erremail"></div>
                    <div>
                        <h6>Password: <input type="password" name="password" id="password"></h6>
                        <div class="alert alert-danger" id="errphone"></div>
                    </div>

                    <input type="submit" href="javascript:void(0);" value="login" name="submit" class="btn"
                        id="hbtn sbtn">
                        <h6><a href="forgetpass.php" style="display: inline;">Forget password?</a></h6>
            </div>
            </form>
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
 <style>

 </style>
</body>

</html>



