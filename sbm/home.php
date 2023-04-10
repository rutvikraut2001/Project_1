<?php

session_start();
// if(!isset($_SESSION ['username'])){
//     header('location:account.php');
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBM | Smart Bus Management </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
         <div class="container">
             <div class="navbar">
                 <div class="logo">
                    <a href="index.html"><img src="images/logo.jpg" width="125px"alt="">
                    </a>
                 </div>
                    <nav>
                        <ul id="MenuItems">
                            
                            <li>You are in Student's Corner</li>
                            <!-- <li><a href="parent.php">Parent's Corner</a></li> -->
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="index.html">LOGOUT</a></li>

                        </ul>
                    </nav>
                    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
                    

                </div>
         </div>


<!-- ---------account page--------- -->


<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <!-- <img src="images/sbmbus.jpg" width="100%"> -->
                <!-- header('location:index1.php'); -->
            </div>

            <!-- <div class = col 1>
                
            </div> -->
        </div>
    </div>

</div>

<!-- --------Footer--------- -->


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
                <h3>Download Now!</h3>
                <p>Download App for Android and iOS mobile phone.</p>
               <div class="app-logo">
                   <img src="images/play store.png" >
                   <img src="images/app store.png">
               </div> 
            </div>
            <div class="footer-col2">
                <img src="images/logo.jpg" width="125px">
                <p>This app helps the user to track the location of any vehicle, and reduce their waiting time.</p>
            </div>
            <div class="footer-col3">
                <h3>Useful links</h3>
                <ul>
                    <li>example1</li>
                    <li>example2</li>
                    <li>example3</li>
                    <li>example4</li>
                </ul>
            </div>
            <div class="footer-col4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Linkedin</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2022 - SBM </p>
    </div>
</div>

<!-- ----------js for toggle menu-------- -->
<script>
            var MenuItems = document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight="0px";
                }

            }
        </script>

<!-- ----------js for toggle form-------- -->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indiactor = document.getElementById("Indicator");



        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indiactor.style.transform = "translateX(100px)";
        }

        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indiactor.style.transform = "translateX(0px)"; 
        }

</script>

</body>
</html>