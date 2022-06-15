<?php  
error_reporting(0);
 $Nomutilisateur  =$_POST['Nomutilisateur'];
 $email = $_POST['email'];
 $Password = $_POST['Password'];
 $CompteDiscord = $_POST['CompteDiscord'];
 $Niveau = $_POST['Niveau'];
 $Divisions = $_POST['Divisions'];
 $CoachID = $_POST['CoachID'];
 $IDPack = $_POST['IDPack'];
 
    ?>
<?php
include 'connect.php';
error_reporting(0);
// INSERTING DATA INTO DATABASE
$IDJoueur =$_GET['editid'];
$sql = "select * from `joueur` where IDJoueur= $IDJoueur";
$result= mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result);
$Nomutilisateur  = $row['Nomutilisateur'];
$email = $row['email'];
$Password = $row['Password'];
$CompteDiscord = $row['CompteDiscord'];
$Niveau = $row['Niveau'];
$Divisions = $row['Divisions'];
$CoachID = $row['CoachID'];
$IDPack = $row['IDPack'];
 

if(isset($_POST['btn'])){
  $Nomutilisateur  = $_POST['Nomutilisateur'];
  $email = $_POST['email'];
  $Password = $_POST['Password'];
  $CompteDiscord = $_POST['CompteDiscord'];
  $Niveau = $_POST['Niveau'];
  $Divisions = $_POST['Divisions'];
  $CoachID = $_POST['CoachID'];
   $IDPack = $_POST['IDPack'];
 
  
    }
  
    if($_POST['Nomutilisateur']!="" and $_POST['email']!="" and $_POST['Password']!="" and $_POST['CompteDiscord']!="" and $_POST['Niveau']!="" and $_POST['Divisions']!="" and $_POST['CoachID']!="" and  $_POST['IDPack']!=""   ){
      $sql="update `joueur` set IDJoueur=$IDJoueur ,Nomutilisateur= '$Nomutilisateur',email='$email',Password='$Password',CompteDiscord= '$CompteDiscord', Niveau ='$Niveau', Divisions='$Divisions',CoachID='$CoachID',IDPack='$IDPack'";
      $result= mysqli_query($mysqli,$sql);
      if($result){
          header('location:ADMIN.php');
      }else{
          die(mysqli_error($mysqli));
      }
    }
  
?>
<link rel="stylesheet" href="ADMIN.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class=" inputs" >
<form  class ='edit'  method ="post">
<input type="text" name ="Nomutilisateur"  value =<?php echo $Nomutilisateur;?>>
<input type="text" name ="email" value =<?php echo $email;?>>
<input type="text" name ="Password"value =<?php echo $Password;?>>
<input type="text" name ="CompteDiscord"  value =<?php echo $CompteDiscord;?>>
<input type="text" name ="Niveau"  value =<?php echo $Niveau;?>>
<input type="text" name ="Divisions"  value =<?php echo $Divisions;?>>
<input type="text" name ="CoachID"  value =<?php echo $CoachID;?>>
<input type="text" name ="IDPack"  value =<?php echo $IDPack;?>>
<button type="submit" id ='update' name ="btn">Update</button>
</div>
</div>




