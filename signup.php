<?php
error_reporting(0);
session_start();
require 'connect.php';
// INSERTING DATA INTO DATABASE
if(isset($_POST['registerbtn'])){
    $Nomutilisateur = $_POST['Nomutilisateur'];
    $email = $_POST['email'];
    $Password	= $_POST['Password'];
    $CompteDiscord = $_POST['CompteDiscord'];

    }
    if($_POST['Nomutilisateur']!="" and $_POST['email']!="" and $_POST['Password']!="" and $_POST['CompteDiscord']!="" ){
    $sql="INSERT INTO `joueur` ( `Nomutilisateur`,`email`,`Password`,`CompteDiscord`) VALUES ( '$Nomutilisateur', '$email','$Password','$CompteDiscord')";
        $result= mysqli_query($mysqli,$sql);
        header("location: login.php");
      }

?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
   </head>
<body>
  <div class="container">
    <div class="title">ZEUSGUIDES</div>
    <div class="sign-in">Do you have an account?  <a href ="">Sign In</a></div>
    <div class="content">
      <form  method ="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text"  name ="Nomutilisateur" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"  name ="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name ="Password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">DiscordID #0101</span>
            <input type="text"  name ="CompteDiscord" placeholder="DiscordID #0101" required>
          </div>
        </div>
        <div class="gender-details">
        <div class="button">
          <input type="submit"  name ="registerbtn" value="Sign Up">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
