<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $email  = $_POST["useremail"];

    if(!$fullname || !$password || !$email){
        echo'<script>
        alert("All feild fill required");
        window.location("login.php");
        </script>';
    }
    $sql = "select * from user_login_data where email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $fullname;
        $_SESSION['useremail'] = $email;
        header('location:packages.php');
    } else {
        echo'<script>
        alert("Something went wrong....Try Again");
        window.location(login.php");
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .active{
            background-color: #ddd;
        }
        .reg-cont{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 90px;
            margin-bottom: 40px;
            font-size: 50px;
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
        .nav .user{
            float:right;
            display: block;
            margin-right: 50px;
        }
        .nav a:hover {
            background: #ddd;
            color: black;
            text-shadow: 1px 1px #222;
            transition: 1s;
        }
        .logo-m{
            width: 50px;
            height: 100%;
            border-radius: 25px;
            margin-left: 20px;
            margin-right: 10px;
            margin-top: 10px;
        }
        .container-reg {
            border: 0.1px solid transparent;
            height: 100vh;
            background-image: url("img-22.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container-reg .bg-div {
            margin-right: auto;
            margin-left: auto;
            padding: 2rem;
            align-items: center;
            height: 350px;
            width: 500px;
            background-color: rgba(34, 34, 34, 0.8)
        }
        .form .submit_div {
            text-align: center;
            width: 150px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: inset 0.2px 0.2px #fff;
        }
        .form .submit_div button {
            text-decoration: none;
            color: #222;
            background-color: #48c4f5;
            font-size: 1rem;
            border-radius: 2px;
            padding: 5px 10px;
            border: 1px solid transparent;
        }
        .form .submit_div button:hover {
            color: #fff;
            background-color: transparent;
            font-weight: bold;
            border: 1px solid #fff;
            transition: 1s;
            cursor: pointer;
        }
        label {
            align-items: flex-start;
            color: #fff;
            font-size: 1.2rem;
        }
        input {
            border: none;
            color: #fff;
            background-color: transparent;
            font-size: 1rem;
            text-align: end;
            outline: none;
        }

        .form .first_name,
        .last_name,
        .middle_name,
        .email_div,
        .password_div,
        .confirmpassword_div,
        .address_div,
        .submit_div {
            display: grid;
            grid-row: 2;
            column-gap: 40px;
            margin: 1rem;
        }
        .form .mem_div p,a{
            color: white;
            text-align: center;
        }
        .form .mem_div a:hover{
            color : #48c4f5;
        }
        .fname-1 {
            display: grid;
            grid-row: 2;
        }

        .fname {
            display: grid;
            grid-row: 2;
            align-self: center;
        }
        .msg-container {
            border: 1px solid maroon;
            background-color: rgba(255, 0, 0, 0.9);
            font-size: 1rem;
            font-weight: lighter;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="nav">
            <a href="home.php" style="padding:0px;margin-top:0px;"><img src="travel.jpg" class="logo-m"></a>
            <a href="home.php" >Home</a>
            <a href="packages.php">Packages</a>
            <a href="login.php" class="active">Login</a>
            <a href="register">Register</a>
            <a href="#" class="user">Welcome User</a>
        </div>
    <section class="container-reg" style="margin-top:-0.7rem;">
        <div class="reg-cont">
            <p>Login</p>
        </div>
        <div class="bg-div">
            <div class="form">
                <form action="login.php" method="post" name="login" onsubmit="return login()">
                    <div class="first_name">
                        <div class="fname-1"><label calss="fullname">Full name</div>
                        <div class="fname"><input type="text" name="fullname" placeholder="Enter full name" ><br></div>
                    </div>
                    <div class="email_div">
                        <div class="fname-1"><label class="email">Email</div>
                        <div class="fname"><input type="email" name="useremail" placeholder="Enter email" ><br></div>
                    </div>
                    <div class="password_div">
                        <div class="fname-1"><label class="password">Password</div>
                        <div class="fname"><input type="password" name="password" placeholder="Enter password" ><br></div>
                    </div>
                    <div class="submit_div">
                        <button type="submit" class="submit_btn">Submit</button>
                    </div>
                    <div class="mem_div">
                        <p>Not Registered Yet <a href="register.php">Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section class="footer">
        <div class="footer-div">
            <div class="sector-1">
                <h1>Quick Links</h1>
                <h2><i class="fa-solid fa-house-chimney"></i><a href="home.php">Home</a></h2>
                <h2><i class="fa-solid fa-user"></i><a href="http://localhost/dashboard/Travel&Tour/home.php#:~:text=Greeting%20of%20the,Journey.%0AThank%20you">About</a></h2>
                <h2><i class="fa-solid fa-bookmark"></i><a href="packages.php">packages</a></h2>
                <h2><i class="fa-solid fa-user-plus"></i><a href="login.php">Login</a></h2>
            </div>
            <div class="sector-2">
                <h1>Follow Us</h1>
                <h2><i class="fa-brands fa-instagram"></i><a href="home.html">Instagram</a></h2>
                <h2><i class="fa-brands fa-facebook-f"></i><a href="home.html">Facebook</a></h2>
                <h2><i class="fa-brands fa-whatsapp"></i><a href="home.html">Whatsapp</a></h2>
                <h2><i class="fa-brands fa-twitter"></i><a href="home.html"> Twitter</a></h2>
            </div>
        </div>
    </section-->
    <div class="copy-rights">
        <h1>All rights are reserved, Creted by <span>Team Tourism.</span></h1>
    </div>
    <script>
        function login(){
            var name=document.login.fullname.value;
            var email=document.login.useremail.value;
            var pass=document.login.password.value;

            if(!name || !email || !pass){
                alert("Please fill all the fields...");
               return false;   
            }
        }
    </script>
</body>
</html>