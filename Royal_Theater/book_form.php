<?php
   session_start();

   $conn = mysqli_connect('localhost','root','','royaltheater_db');

   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $movie = $_POST['movie'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $tickets = $_POST['tickets'];
      

      $query = " INSERT INTO bookings (name, email, phone, movie, date, time, tickets) 
                  VALUES ('$name','$email','$phone','$movie','$date','$time','$tickets') ";
      
      mysqli_query($conn, $query);

      $_SESSION['success'] = "<div class='toast' id='toast'><h3 class='success'>You have successfully booked your movie!</h3> <i class='fa-solid fa-xmark' id='close-btn' onclick='close())'></i></div>";
      header('location:book.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>