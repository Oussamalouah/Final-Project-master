<?php
error_reporting(0);
require 'connect.php';
if(isset($_POST['finish'])){
    $coach = $_POST['coach'];
    $sql = "UPDATE joueur SET CoachID= ('$coach') WHERE IDJoueur=5";
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
        <div class ="coaches">
            <img src="./img/Imperialhal.png" alt="">
            <img src="./img/doublelift.png" alt="">
            <img src="./img/tenz.png" alt="">
        </div>
        <form method ="post">
        <div class="names">
            <div class="coach1">
            <input type="radio" name ="coach" value="3">
                <button class="imp"><b>Imperialhal</br></button>
            </div>
        <div  class="coach2">
            <input type="radio" name ="coach" value="1">
            <button class ="double"><b>Doublelift</br></button>
        </div>
        <div  class="coach3">
            <input type="radio" name ="coach" value="2">
            <button class ="tenz"><b>Tenz</br></button>
        </div>
        </div>
        <div class="btn"><button class ="button" name="finish"><a href ="payement.php">TRY PRO NOW</a></button>
</div>
     </form>
</div>
</body>
</html>