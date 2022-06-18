<?php
session_start();
require 'connect.php';
if(empty($_SESSION["IDJoueur"])){
    header("location: index.php");
  }
require 'connect.php';
if(isset($_POST['finish'])){
    $coach = $_POST['coach'];
    $sql = "UPDATE joueur SET CoachID= ('$coach')  WHERE IDJoueur= IDJoueur";
    $result= mysqli_query($mysqli,$sql);
     

    }   
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="coach.css">
    <title>Select Your Coach</title>
</head>
<body>
    <div class="title"><h1>PICK YOUR COACH</h1></div>
    <div class="container">
        <form method ="post">
        <div class="names">
         <div class="coach1">
               <img src="./img/Imperialhal.png" alt="">
                <button class="imp"><b>Imperialhal</br></button>
                <input type="radio" name ="coach" value="3"> 
            </div>
        <div  class="coach2">
            <img src="./img/doublelift.png" alt="">
            <button class ="double"><b>Doublelift</br></button>
            <input type="radio" name ="coach" value="1">
        </div>
        <div  class="coach3">
            <img src="./img/tenz.png" alt="">
            <button class ="tenz"><b>Tenz</br></button>
            <input type="radio" name ="coach" value="2">
        </div>
     </div>
       
        <div class="btn"><button class ="button" name="finish"><a href ="payement.php">TRY PRO NOW</a></button>
</div>
     </form>
</div>
</body>
</html>