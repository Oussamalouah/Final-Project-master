<?php
error_reporting(0);
session_start();
require 'connect.php';
if(empty($_SESSION["IDJoueur"])){
    header("location: index.php");
  }
if(isset($_POST['finish'])){
    $Niveau = $_POST['Niveau'];
    $div1 = $_POST['div1'];
    $IDJoueur= $_SESSION['IDJoueur'];
    $sql = "UPDATE joueur SET Niveau=('$Niveau'),Divisions =('$div1')  WHERE IDJoueur = '$IDJoueur'";
     $result= mysqli_query($mysqli,$sql);
     

    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="select-rank.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
 <title>Rank Selection</title>
</head>
<body >
 <div class="title"> 
    <a href ="welcome.php"> <img  id ="closebtn"src="./img/closebtn.png" alt=""></a>
     <h1>Select your<br> current rank</br></h1>
      <h3>We use this to create your plan </h3> 
      <form action =""  method="post">
      <div class="quiz">
        <div class="iron"  tabindex="2">
        <input type="radio"  class="ironinput" name="Niveau" value="Iron" />
            <img src="./img/iron.png" alt="">
            <p>Iron</p>
        </div>  
        <div class="bronze" tabindex="2">
        <input type="radio"  class ="bronzeinput"  name="Niveau" value="Bronze" />
        <img src="./img/bronze.png" alt="">
            <p>Bronze</p>
        </div> 
        <div class="silver" tabindex="2">
        <input type="radio"  class ="silverinput" name="Niveau" value="Silver" />
        <img src="./img/silver.png" alt="">
            <p>Silver</p>
        </div>  
        <div class="gold" tabindex="2">
        <input type="radio"  class ="goldinput" name="Niveau" value="Gold" />
        <img src="./img/gold.png" alt="">
            <p>Gold</p>
        </div>  
        <div class="plat" tabindex="2">
        <input type="radio"  class ="platinput" name="Niveau" value="Platinum" />
        <img src="./img/plat.png" alt="">
            <p>Platinum</p>
        </div>  
        <div class="diam" tabindex="2">
        <input type="radio"  class ="diaminput" name="Niveau" value="Diamond" />
        <img src="./img/diam.png" alt="">
            <p >Diamond</p>
        </div>  
        <div class="division">
         <h2>DIVISION :</h2>
         <div class="buttons">
            <div class="form-horizontal">
                <button type="button" value="I">I</button> 
                <input type="radio" name ="div1" value="I">
            </div>
            <div>
                <button type="button" value="II">II</button>  
                <input type="radio" name ="div1" value="II">
            </div>
            <div>
                <button type="button" value="III">III</button>
                <input type="radio" name ="div1" value="III">
            </div>
            <div>
                <button type="button" value="IV">IV</button>
                <input type="radio" name ="div1" value="IV">
            </div>
        </div>
     </div>
     </form>
           <button class ="finish-btn" name="finish"> <a href ="membership.php">FINISH</a></button>
    </div> 
</div>
<script src="./radio.js"></script> 
</body>
</html>