<?php



session_start();

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
                           
                            <li><a href="account.php">Student's Corner</a></li>
                            <li><a href="parent.php">Parent's Corner</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
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

            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <h2>Contact Us</h2>
                        <!-- <span onclick="register()">Register</span> -->
                        <!-- <hr id="Indicator"> -->
                    </div>

                    <!-- <form id="LoginForm" action="validation.php" method="POST" autocomplete="off">
                        <select id="type">
                            <option value="select type">Select Type</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                        </select>    
                        
                        <input type="" name="uid" placeholder="Enter your UID">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="contact.html">Forgot Password</a>
                    </form> -->

                    <form action="" method="POST" id="RegForm" autocomplete="off">
                       
                        <input type="text"  name = "username" required placeholder="Name">
                        <br><br>
                        <input type="email" name = "email" required placeholder="Enter your email">
                        <br><br>
                        <input type="tel" maxlength="10" name="phone" required placeholder="Contact no.">
                        <br><br>
                        <input type="text" name="message" required placeholder="Write your Message">
                        <!-- <input type="text" placeholder="Parents name">
                        <input type="tel" maxlength="10" placeholder="Parents Contact no."> -->
                       
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
            </div>
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