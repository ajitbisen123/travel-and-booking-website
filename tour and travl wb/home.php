<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Touraism Website</title>
    <style>
        .text{
            margin-top:-2rem;
        }
        .active{
            background-color: #ddd;
        }
        #aboutid{
            margin:3rem 0;
        }
        #packagesid{
            margin-top:-1.4rem;
        }
        .logo{
            text-align:center;
            width: 150px;
            height:100px;
            padding-top:6.5rem;
            margin-left:auto;
            margin-right:auto;
        }
        .fa-earth-asia{
            margin-top:0.3rem;
            font-size:5rem;
            pointer-events: none;
            color:#191970;
            text-shadow: 2px 2px #fff;
        }
        .titalbar {
            font-size: 1.2rem;
            font-weight: lighter;
            text-shadow: 0.4px 0.4px #222;
        }
        .titalbar a{
            padding:0 2rem;
            text-decoration:none;
        }
        .menubar .logout {
            margin: 0;
            padding: 0.2rem;
        }

        .menubar .logout:hover {
            border: 1px solid transparent;
            transition: none;
        }

        .fa-sign-out {
            margin: 0;
            padding: 0;
            font-size: 1.3rem;
        }

        .fa-sign-out:hover {
            border: none;
            color: #fff;
            transform: scale(1.2);
            transition: 1s;
        }
        .nav{
            overflow: hidden;
            background-color: #48c4f5;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .nav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            height: 100%;
            padding-top: 22px;
            font-weight: bold;
            text-shadow: 0.5px 0.5px #fff;   
        }
        .nav .dropdown{
            float: left;
            overflow: hidden;
        }
        .nav .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: black;
            font-size: 20px;
            text-shadow: 0.5px 0.5px #fff;
            font-weight: bold;
            padding: 14px 16px;
            padding-top: 22px;
            background-color: #48c4f5;
            
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 212px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
         }
         .dropdown-content a {
           float: none;
           color: black;
           padding: 12px 16px;
           text-decoration: none;
           display: block;
           text-align: left;
         }
         .dropdown-content a:hover{
            color: #ddd;
         }
         .dropdown:hover .dropdown-content {
            display: block;
            background-color: white;
         }
        .dropdown:hover .dropbtn{
            background: #ddd;
            text-shadow: 1px 1px #222;
            transition: 1s;
            cursor: pointer;
        }
        .nav a:hover {
            background: #ddd;
            text-shadow: 1px 1px #222;
            transition: 1s;
        }
        .nav .user{
            float:right;
            display: block;
            margin-right: 50px;
        }
        .logo-m{
            width: 50px;
            height: 100%;
            border-radius: 25px;
            margin-left: 20px;
            margin-right: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="nav">
            <a href="home.php" style="padding:0px;margin-top:0px;"><img src="travel.jpg" class="logo-m"></a>
            <a href="home.php" class="active">Home</a>
            <a href="packages.php">Packages</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="#" class="user">Welcome User</a>
    </div>
    <section class="homeimg">
            <div class="logo">
            <i class="fa-solid fa-earth-asia"></i><i class="fa-solid fa-truck-plane" style="font-size:2rem;color:#fff;margin-left:-1.5rem;text-shadow:2px 2px #222"></i> 
            </div>
        <div class="text">
            <h5 style="padding:1rem;">Explore, Travel, Discover</h5>
            <h1>Travel Around</br>The Bhopal</h1>
            <a href="packages.php" class="book-btn">Checkout Packages</a>
        </div>
    </section>
    <section class="booking" id="packagesid">
        <div class="booking-bar">
            <div class="heading">
                <h1>OUR SERVICES</h1>
            </div>
            <div class="slider">
                <div class="slider-1">
                    <div class="div-1"></div>
                    <div class="div-2">
                        <h1>CAR RENTAL SERVICE</h1>
                        <h2 style="font-weight:lighter">Our Organization will also take care of turists traveling medium 
                            here you get the car rental services included in the corresponding package.
                        </h2>
                        <a href="packages.php">Checkout Packages</a>
                    </div>
                </div>
                <div class="slider-2">
                    <div class="div-1"></div>
                    <div class="div-2">
                        <h1>BOOKING & PACKAGE TOUR</h1>
                        <h2 style="font-weight:lighter">Easy and very catchy Interface provided to the tourits for booking 
                            their desired packages & easy payment service</h2>
                        <a href="packages.php">Checkout Packages</a>
                    </div>
                </div>
                <div class="slider-3">
                    <div class="div-1"></div>
                    <div class="div-2">
                        <h1>COVID SAFETY MEASURES</h1>
                        <h2 style="font-weight:lighter">Our Organization also taking care of your safety and maintaining all the
                            safety measures that are important through out your journey.  
                        </h2>
                        <a href="packages.php">Checkout Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about" id="aboutid">
        <div class="container">
            <div class="img-container">
                <!-- img src="img-25.jpg" style="background-size:10% 10%;background-position:center;"> -->
            </div>
            <div class="text-container">
                <div class="heading">
                    <h1>About Us</h1>
                    <h3>Greeting of the Day,<br>
                        Hello, We are <a href="#" style="color:#191970;font-weight:bolder">Team Tourism</a> and we have implemented a 
                        tourism project where we have provided <span style="font-weight:bolder">Booking & Payment services to the users.</span>
                        We have also listed various packages that the user can checkout on our website.<span style="font-weight:bolder">Login & Register portals</span> are also well designed.<br>
                        <span style="font-weight:bolder">So , Checkout our website & Book a Happy Journey.</span><br>
                        <span style="color:#191970; font-weight:bolder">Thank you</span>
                    </h2>
                        <a href="" class="btn-about">About us</a>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="footer-div">
            <div class="sector-1">
                <h1>Quick Links</h1>
                <h2><i class="fa-solid fa-house-chimney"></i><a href="home.php">Home</a></h2>
                <h2><i class="fa-solid fa-user"></i><a href="http://localhost/dashboard/Travel&Tour/home.php#:~:text=Greeting%20of%20the,Journey.%0AThank%20you">About</a></h2>
                <h2><i class="fa-solid fa-user-plus"></i><a href="login.php">Login</a></h2>
                <h2><i class="fa-solid fa-bookmark"></i><a href="packages.php">Packages</a></h2>
            </div>
            <div class="sector-2">
                <h1>Follow Us</h1>
                <h2><i class="fa-brands fa-instagram"></i><a href="home.html">Instagram</a></h2>
                <h2><i class="fa-brands fa-facebook-f"></i><a href="home.html">Facebook</a></h2>
                <h2><i class="fa-brands fa-whatsapp"></i><a href="home.html">Whatsapp</a></h2>
                <h2><i class="fa-brands fa-twitter"></i><a href="home.html"> Twitter</a></h2>
            </div>
        </div>
    </section>
    <div class="copy-rights">
        <h1>All rights are reserved, Creted by <span> Team Tourism.</span></h1>
    </div>

</body>

</html>