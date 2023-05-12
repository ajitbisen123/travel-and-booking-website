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
    <title>Touraism Website </title>
    <style>
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
        .text{
            margin-top:-2rem;
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
       .heading-title{
           text-align: center;
           margin-bottom: 1rem;
           margin-top: 6rem;
           font-size: 3.5rem;
           text-transform: uppercase;
           color:black;
         }
         .booking{
            width: 80%;
            margin-left: 140px;
         }
       .booking .book-form{
          padding:2rem;
          background: #eee;
          width: 100%;
         }

       .booking .book-form .flex{
          display: flex;
          flex-wrap: wrap;
          gap:2rem;
        }

       .booking .book-form .flex .inputBox{
        flex:1 1 25rem;
        }
        .booking .book-form .flex .inputBox input{
        width: 100%;
        height: 35px;
        padding:1.2rem 1.4rem;
        font-size: 1.2rem;
        color:#777;
        text-transform: none;
        margin-top: .5rem;
        border:.1rem solid black;
        }
       .booking .book-form .flex .inputBox input:focus{
        background: black;
        color:white;
       }
       .booking .book-form .flex .inputBox input:focus::placeholder{
       color:whitesmoke;
       font-size: 1rem;
       }

      .booking .book-form .flex .inputBox span{
       font-size: 1rem;
       color:#777;
       }

      .booking .book-form .btn{
       margin-top: 1.3rem;
       width: 105px;
       height:40px;
       background-color: #48c4f5;
       color: #222;
       margin-left: 430px;
       border: 1px solid transparent;
      }
      .booking .book-form .btn:hover{
        background-color: black;
        border: 1px solid white;
        transition: 1s;
        cursor: pointer;
        font-weight: bold;
        color: white;
      }
    </style>
</head>
<body>
<div class="nav">
            <a href="home.php" style="padding:0px;margin-top:0px;"><img src="travel.jpg" class="logo-m"></a>
            <a href="home.php" >Home</a>
            <a href="packages.php">Packages</a>
            <a href="login.php">Login</a>
            <a href="#">Recommendation</a>
            <a href="#" class="user">Welcome <?php echo $_SESSION['username']; ?></a>
    </div>
    <section class="booking">
     <h1 class="heading-title">book your trip!</h1>
      <form action="book_form.php" name="validate" method="post" class="book-form" onsubmit="return validate_form()">
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter Your Name" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter Your Email" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="Enter Your Number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter Your Address" name="address">
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="Place to Visit" name="location">
         </div>
         <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="Number of Guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="Arrivals">
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="Leaving">
         </div>
      </div>
      <button type="submit" class="btn" name="send">Submit</button>
   </form>
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

    <script>
        function validate_form()
        {
            var name= document.validate.name.value;
            var email= document.validate.email.value;
            var phone= document.validate.phone.value;
            var add= document.validate.address.value;
            var location= document.validate.location.value;
            var guests=document.validate.guests.value;
            var arr=document.validate.Arrivals.value;
            var leav=document.validate.Leaving.value;

            if(!name || !email || !phone || !add || !location || !guests || !arr || !leav)
            {
                alert("Please fill all the fields..");
               return false;
            }
        }
    </script>
</body>
</html>