<?php
   include '_dbconnect.php';
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['Arrivals'];
      $leaving = $_POST['Leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($conn, $request);
      echo '<script>alert("Booking Successful")</script>';
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>