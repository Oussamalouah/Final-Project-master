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
    <link rel="stylesheet" href="quiz.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>Quiz</title>
</head>
<body>
    <div class="logo"> 
        <a href ="welcome.php"> <img class="close" id ="closebtn"src="./img/closebtn.png" alt=""></a>
        <img src="./img/logo2.png" alt="">
        <h1 class="first">Welcome!</h1>
        <h2 class="slide"> <span class="second">The following quick quiz will help us personalize your weekly training plan</span>.</h2>
    </div>
    <div class="button"><button class ="start-btn"><b><a href ="select-rank.php">START QUIZ </a></br></button></div>
</body>
</html>