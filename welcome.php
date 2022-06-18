<?php
session_start();
error_reporting(0);
require 'connect.php';
if(!empty($_SESSION["IDJoueur"])){
    $IDJoueur = $_SESSION["IDJoueur"];
    $result = mysqli_query($mysqli, "SELECT * FROM joueur WHERE IDJoueur = $IDJoueur");
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>ZEUSGUIDES</title>
</head>
<div class ="header"> 
   <div class="navbar">
            <h1 ><a href="index.php">ZEUSGUIDES</a></h1>
            <button id ="logout"><a href = "logout.php">Logout</a></button>
   </div>
   <div class="username">
         <img  class ="avatar"src="./img/avatar.png" alt="">   
      <p id ="username"> <?php echo $row["Nomutilisateur"] ;?></p>
      
   </div>
<div class="carousel">
      <div class="carousel_inner">
         <div class="carousel_item carousel_item__active">
            <img src="./img/image1.webp" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="./img/image2.png" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="./img/image3.webp" alt="" class="carousel_img">
         </div>
      </div>
   </div>
   <div class="info">
      <h1>LEARN LEAGUE OF LEGENDS FROM</h1>
      <h2><b>DOUBLELIFT</b></h2>
      <h3>7X LCS CHAMPION</h3>
      <p><b>Learn how to master League of Legends from the most<br> accomplished pro in North America.</br></b></p>
   </div>
   <div class="btn"><button   id ="start-btn"><b><a href="terms.php">START RIGHT NOW</a></br></button></div>
</div>
<body>   
   <div class="sections">
      <div class="coach-section">
            <img src="./img/coach.webp" alt="">
            <div class="coach-content">
               <h1>Play with a Pro right now</h1>
               <p>Our elite coaches are in the top 1% and can help<br> you take your play to the next level.</br> </p>
               <button id ="training-btn"><b><a href="terms.php">START TRAINING</a></br></button></div>
            </div>
            <div class="trust-content">
               <div class="elite-coaches"> 
                   <h3>Elite Coaches</h3>
                   <p>Top 1% of players globally</p>
                </div>
                <div class="line"></div>
                <div class="trust-pic">
                  <img id ="stars"src="./img/stars.png" alt="">
                  <p>Trusted by Gamers</p>
                </div>
            </div>
      </div>
   </div>
   <p id ="prop">Our Professional Players</p>
   <div class="pro-section">
      <div class="imp">
            <img src="./img/Imperialhal.png" alt="">
            <p id="imp">Imperialhal</p>
         </div>
         <div class ="double">
            <img src="./img/doublelift.png" alt="">
            <p id ='double'>Doublelift</p>
         </div>
            <div class ="tenz">
               <img src="./img/tenz.png" alt="">
               <p id='tenz'>Tenz</p>
            </div>
      </div>
   <footer>
            <img id ="zlogo" src="./img/logo.png" alt="">
            <div class="company-info">
               <li>COMPANY INFO</li>
               <li id="Quicksand">Pricing</li>
               <li id="Quicksand">Terms and Conditions </li>
               <li id="Quicksand">Privacy Policy</li> 
            </div>
           <div class="games">
              <li id="games">GAMES</li>
              <li id="lol">Leauge Of Legends </li>
              <img id ="lolimg"src="./img/logolol.png" alt="">
           </div>
           <div class="social">
               <li id ="social">Social</li>
               <div class="youtube">
               <img src="./img/yt.png" alt="">
               <li id="Quicksand">Youtube</li>
               </div>
              <div class ="insta">
              <img src="./img/instagram.png" alt="">
              <li id="Quicksand">Instagram</li>
              </div>
              <div class="twitter">
              <img src="./img/twitter.png" alt="">
              <li id="Quicksand">Twitter</li>
              </div>
              <div class="facebook">
              <img src="./img/facebook.png" alt="">
              <li id="Quicksand">Facebook</li>
              </div>   
           </div>
   </footer>
   <script src="./script.js"></script> 
</body>
</html>