<?php 
error_reporting(0);
session_start();
require 'connect.php';
if(!empty($_SESSION["IDJoueur"])){
    header("location: welcome.php");
}
if(isset($_POST["loginbtn"])){
 $email = $_POST['email'];
 $Password = $_POST['Password']; 
 $result = mysqli_query($mysqli,"SELECT * FROM joueur WHERE email ='$email'");
 $row = mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result) > 0){
     if($Password == $row["Password"]){
       $_SESSION["login"] = true;
       $_SESSION["IDJoueur"] =$row["IDJoueur"];
       header("location: welcome.php");
     }
     else{
        echo
        "<script>alert('Wrong Password');</script>";
     }

 }
 else{
     echo
     "<script>alert('User Not Registered');</script>";
 }

}

?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
   </head>
<body>
  <div class="container">
    <div class="title">ZEUSGUIDES</div>
    <div class="sign-in">Don’t have an account?   <a href ="signup.php">Sign Up</a></div>
    <div class="content">
      <form  method ="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name ="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name ="Password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="gender-details">
         <div class="button" >
         <input type ="submit" name ="loginbtn"  value = "LOG IN">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
