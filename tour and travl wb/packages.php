<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html .dorpdown::-webkit-scrollbar{
            width:0;
        }
        #icon-search{
            font-size:1rem;
            color:#fff;
            margin:-1.5rem;
            text-shadow: none;
            /* border:1px solid red; */
        }
        .menubar .logout{
            margin:0;
            padding:0.2rem;
        }
        .menubar .logout:hover{
            border:1px solid transparent;
            transition: none;
        }
        .active{
            background-color: #ddd;
        }
        .fa-sign-out{
            margin:0;
            padding:0;
            font-size:1.3rem;
        }
        .fa-sign-out:hover
        {
          border:none;
          color:#fff;
          transform: scale(1.2);
          transition: 1s;
        }
        .dorpdown{
          margin-top:0.5rem;
          width:330px;
          height:150px;
          text-shadow:none;
          background-color:rgba(0, 0, 0, 0.8);
          border:1px solid #222;
          overflow:scroll;
          padding:2px 6px;
          border-radius:5px;
          position:absolute;
          display:none;
        }
        ul{
          color:#fff;
          cursor:pointer;
          /* height:300px;
          width:310px; */
          font-size:1rem;
          font-weight:lighter;
        }
        ul li a{
          text-decoration:none;
          font-size:0.7rem;
          font-weight:lighter;
          padding:0.1rem 0;
        }
        ul li a .fa-search{
          padding-right:1rem;
          font-size:0.7rem;
          color:#fff;
        }
        li{
           justify-content: space-between;
           color:#fff;
           font-weight:lighter;
           padding:5px 0;
        }
        .titalbar a{
            text-decoration: none;
            font-size: 1rem;
            font-weight: lighter;
            text-shadow: none;
            color: #fff;
            border: 1px solid #222;
            padding: 0.2rem 1rem;
            border-radius: 3px;
            background-color: #222;
        }
 
        .titalbar .search {
            font-size: 1rem;
            font-weight: lighter;
            color: #fff;
            border: 1px solid #222;
            padding: 0.2rem 2rem;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, 0.4);
            width:330px;
        }
        .titalbar input::placeholder{
            color:#fff;
            font-size:0.8rem;
        }
        .heading-div {
            text-align: center;
            padding: 1rem;
        }

        .heading-div h1 {
            font-size: 2rem;
            color: #222;
            margin-top: 4rem;
        }

        .container {
            /* border: 1px solid red; */
            display: block;
            background-color: rgb(243, 236, 236);
        }

        .container .title {
            margin: 1rem;
        }

        .container .header-div {
            /* border: 1px solid blue; */
            display: grid;
            grid-template-rows: max-content;
            grid-row-start: 1;
            grid-row-end: 3;
            row-gap: 50px;
            column-gap: 50px;
        }

        html .header-div::-webkit-scrollbar {
            visibility: hidden;
        }

        .container .header-div .set-container {
            display: grid;
            grid-row: 2/span 1;
            grid-row-gap: 60px;
            /* border:1px solid red; */
            /* overflow:auto; */
        }

        .container .header-div .pack-1 {
            display: grid;
            grid-template-rows: max-content;
            border: 1px solid black;
            height: 400px;
            width: 500px;
            overflow: hidden;
        }

        .pack-1 .img-div,
        .pack-1 .content-div {
            display: grid;
            grid-row: 2;
            width: 300px;
            height: 200px;
            border: 1px solid black;
            /* border:1px solid red; */
        }

        #card-1,
        #card-2,
        #card-3,
        #card-4,
        #card-5,
        #card-6,
        #card-7,
        #card-8,
        #card-9,
        #card-10,
        #card-11,
        #card-12,
        #card-13,
        #card-14,
        #card-15,
        #card-16 {
            height: 500px;
            width: 570px;
        }

        .pack-1 .content-div {
            width: 265px;
            height: auto;
        }

        .pack-1 .img-div {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            width:200;
            height: 500px;
        }

        #card-1 .img-div {
            background-image: url('img-19.jpg');
        }

        #card-2 .img-div {
            background-image: url('van_vihar.jpg');
            background-position:right;
        }

        #card-3 .img-div {
            background-image: url('Tajul.jpg');
            background-position:top;
        }

        #card-4 .img-div {
            background-image: url('Moti.jpg');
           
        }

        #card-5 .img-div {
            background-image: url('manav.jpg');
           
        }

        #card-6 .img-div {
            background-image: url('trible.jpg');
        }

        #card-7 .img-div {
            background-image: url('Bhojeshwar.jpg');
        }

        #card-8 .img-div {
            background-image: url('Birla.jpg');
        }

        #card-9 .img-div {
            background-image: url('lower.jpg');
        }

        #card-10 .img-div {
            background-image: url('Bharat_Bhawan.jpg');
        }

        #card-11 .img-div {
            background-image: url('img-16.jpg');
        }

        #card-12 .img-div {
            background-image: url('kerwa-dam.jpg');
        }

        #card-13 .img-div {
            background-image: url('kamalpati.jpg');
            background-size:100% 100%;
        }

        #card-14 .img-div {
            background-image: url('manuabhan.webp');
        }

        #card-15 .img-div {
            background-image: url('regional-center.jpg');
        }

        #card-16 .img-div {
            background-image: url('waterpark.jpg');
        }

        .pack-1 .content-div .text-div {
            /* border:1px solid red; */
            height: 260px;
            text-align: center;
            padding-top: 2rem;
            border-bottom: 1px solid #222;
        }
        .pack-1 .content-div .text-div .sr-img{
            background-image: url('star.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .pack-1 .content-div .anchor-div {
            padding: 2rem;
            /* border:1px solid red; */
        }

        .pack-1 .content-div {
            /* border:1px solid red; */
            text-align: center;
            
            /* padding:6rem; */
            /* border:1px solid red; */
        }

        .pack-1 .content-div a {
            text-decoration: none;
            display: block;
            margin:1.5rem 1rem;
        }
        .pack-1 .content-div #map,#about{
            font-size:1.1rem;
        }
        .pack-1 .content-div #book-btn{
            text-decoration: none;
            font-size: 1.2rem;
            border: 1px solid #222;
            background-color: #222;
            color: #fff;
            padding: 0.4rem 1rem;
            border-radius: 4px;
        }
        .pack-1 .content-div h4 {
            font-weight:lighter;
            color: #222;
            font-size:1.7rem;
            padding: 1rem;
        }

        .pack-1 .content-div #book-btn:hover {
            border: 1px solid #48c4f5;
            background-color: #48c4f5;
            color: #222;
            transition: 1s;
        }
      .user-log{
        font-size:1.1rem;
        background-color:rgba(0,0,0,0.4);
        color:#fff;border:1px solid #222;
        border-radius:4px;text-shadow: 1px 1px #222;
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
    </style>
</head>

<body>
    <div class="nav">
        <a href="home.php" style="padding:0px;margin-top:0px;"><img src="travel.jpg" class="logo-m"></a>
        <a href="home.php" >Home</a>
        <a href="packages.php" class="active">Packages</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="#" class="user">Welcome User</a>
    </div>
    <section class="heading">
        <div class="heading-div">
            <h1>OUR PACKAGES</h1>
            <hr style = "margin:.5rem 20rem; ">
        </div>
    </section>
    <section class="container">
        <div class="header-div">
            <div class="set-container">
                <div class="pack-1" id="card-1">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>UPPER LAKE BHOPAL</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="https://en.wikipedia.org/wiki/Bhojtal" target="_blank" id="about"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Upper+Lake+Area,+Bhopal,+Madhya+Pradesh/@23.2521962,77.3418612,13z/data=!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c5d7f8e060d29:0xb74db1f6aef8ce6e!2m2!1d77.3212823!2d23.2659619" target="_blank" id="map"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
                <div class="pack-1" id="card-2">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>Van Vihar Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="https://en.wikipedia.org/wiki/Van_Vihar_National_Park" target="_blank" id="about"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Van+Vihar+National+Park,+Lake+View+Walk+Path,+Krishna+Nagar,+Shymala+Hills,+Bhopal,+Madhya+Pradesh/@23.2353371,77.380967,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c5d4884b722b5:0xa5feafcbfd12da6!2m2!1d77.3664318!2d23.232214" id="map"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="set-container">
                <div class="pack-1" id="card-3">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>Taj Ul Masjid Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="https://en.wikipedia.org/wiki/Taj-ul-Masajid" id="about" target="_blank"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Taj+Ul+Masjid+Bhopal,+NH+12,+Kohefiza,+Bhopal,+Madhya+Pradesh+462001/@23.2489033,77.3950241,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c681a7d83af6b:0x7dda3ac9601ed629!2m2!1d77.3928231!2d23.262987" id="map" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
                <div class="pack-1" id="card-4">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>Moti Masjid Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="https://hi.wikipedia.org/wiki/%E0%A4%AE%E0%A5%8B%E0%A4%A4%E0%A5%80_%E0%A4%AE%E0%A4%B8%E0%A5%8D%E0%A4%9C%E0%A4%BF%E0%A4%A6,_%E0%A4%AD%E0%A5%8B%E0%A4%AA%E0%A4%BE%E0%A4%B2" id="about" target="_blank"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Moti+Masjid,+Hawamahal+Rd,+Opposite+Moti+Masjid,+Chowki+Talaiya,+Talaiya,+Bhopal,+Madhya+Pradesh+462001/@23.2432933,77.4054698,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c681f09161d8b:0xe5f75339aa736bf4!2m2!1d77.3990271!2d23.2558327" id="map"><i class="fa fa-globe" aria-hidden="true" target="_blank"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="header-div">
            <div class="set-container">
                <div class="pack-1" id="card-5">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4 style="font-size:1.5rem;margin-top:-1rem;">Indira Gandhi Rashtriya Manav Bhopal </h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="https://en.wikipedia.org/wiki/Indira_Gandhi_Rashtriya_Manav_Sangrahalaya" id="about" target="_blank"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Indira+Gandhi+Rashtriya+Manav+Sangrahalaya,+69JH%2BR3R,+Lake+View+Road,+next+to+RCE+campus,+Shymala+Hills,+Bhopal,+Madhya+Pradesh+462013/@23.2346658,77.3869453,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c5d52c51e9e93:0x31433bafdd6a7cbd!2m2!1d77.3776558!2d23.2320921" id="map" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
                <div class="pack-1" id="card-6">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>Tribal Museum Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                            <a href="#" id="about"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>   Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Madhya+Pradesh+Tribal+Museum,+Shyamla+Hills+Rd,+near+State+Museum,+Shymala+Hills,+Bhopal,+Madhya+Pradesh+462002/@23.2298433,77.3930789,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c42b15aa23a3f:0xc256a10ddabc3b64!2m2!1d77.3847649!2d23.2343968" id="map" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="set-container">
                <div class="pack-1" id="card-7">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4 style="font-size:1.5rem;margin-top:-1rem;">Bhojeshwar Mahadev Mandir Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                        <a href="https://en.wikipedia.org/wiki/Bhojeshwar_Temple" id="about" target="_blank"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Bhojeshwar+Mahadev+Temple,+Bhojpur,+Raisen,+Bhojpur+Temple,+Bhojpur+Road,+Bhojpur,+Madhya+Pradesh+464551/@23.1711313,77.4358782,12z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c3814866a0055:0xe0dca67e894e60f4!2m2!1d77.5795329!2d23.1002597" id="map" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
                </div>
                <div class="pack-1" id="card-8">
                    <div class="img-div">

                    </div>
                    <div class="content-div">
                        <div class="text-div">
                            <h4>Birla Mandir Bhopal</h4>
                            <h3 style="margin-top:1rem"><h5 style="color:maroon">20% Discount Prize !</h5><i class="fa fa-inr" aria-hidden="true"></i>  399 / person</h3>
                            <div class="sr-img" style="height:19px;width:100px;margin-left:auto;margin-right:auto;margin-top:1rem">
                            </div>
                        </div>
                        <div class="anchor-div">
                        <a href="https://en.wikipedia.org/wiki/Birla_Mandir" id="about" target="_blank"><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:1.1rem"></i>    Know More</a>
                            <a href="https://www.google.com/maps/dir/Maharana+Pratap+Nagar,+Bhopal,+Madhya+Pradesh/Birla+Mandir+Rd,+Arera+Hills,+Bhopal,+Madhya+Pradesh/@23.2351535,77.4176832,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x397c4269deb07df9:0xfee61a854a2e5374!2m2!1d77.4326473!2d23.2313434!1m5!1m1!1s0x397c42944cbac04b:0x68c40a8b84a39f3!2m2!1d77.4113967!2d23.2385397" id="map" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>    Get Map</a>
                            <a href="book.php" id="book-btn">Book</a>
                        </div>
                    </div>
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
                <h2><i class="fa-solid fa-bookmark"></i><a href="home.php">Book</a></h2>
                <h2><i class="fa-solid fa-user-plus"></i><a href="login.php">Login</a></h2>
            </div>
            <div class="sector-2">
                <h1>Follow Us</h1>
                <h2><i class="fa-brands fa-instagram"></i><a href="home.php">Instagram</a></h2>
                <h2><i class="fa-brands fa-facebook-f"></i><a href="home.php">Facebook</a></h2>
                <h2><i class="fa-brands fa-whatsapp"></i><a href="home.php">Whatsapp</a></h2>
                <h2><i class="fa-brands fa-twitter"></i><a href="home.php"> Twitter</a></h2>
            </div>
        </div>
    </section>
    <div class="copy-rights">
        <h1>All rights are reserved, Creted by <span>Team Tourism.</span></h1>
    </div>
</body>
</html>