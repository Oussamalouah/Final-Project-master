<?php
session_start();
require 'connect.php';
if(empty($_SESSION["IDJoueur"])){
    header("location: index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="ship.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>Pro membership</title>
</head>
<body>
 <a href ="welcome.php"> <img  id ="closebtn"src="./img/closebtn.png" alt=""></a>
    <div class="container">
      <div class="text">
        <h1>THE ZEUSGUIDES GUARANTEE</h1>
        <h2>Climb at least 5 divisions in 5 months, <br>or we'll give you an additional 6-month<br> membership completely free.</br></h2>
      </div>
       <div class ="pro">
           <h1>PRO MEMBERSHIP</h1>
           <h2>$7.99<span>/MONTH</span></h2>
           <div class="line"></div>
           <p>-4 hours of Coaching </p>
           <p>-Your games analyzed<span> by pros</span></p>
           <p>-Exclusive access <span>to courses with the world's best pros</span></p>
           <p>-10% off more coaching</p>
           <button  class ="button"><b> <a href ="coach.php">TRY PRO NOW</a></br></button>
       </div>
    </div>

</body>
</html>