<?php
include 'connect.php';
error_reporting(0);
// INSERTING DATA INTO DATABASEe

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEUSADMIN</title>
    <link rel="stylesheet" href="ADMIN.css">
    <link href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  
<div  id ="table" class="container my-5">
<h1>ZEUSGUIDES</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col"> IDJoueur </th>
        <th> Nomutilisateur</th>
        <th>email</th>
        <th>Password</th>
        <th> CompteDiscord </th>
        <th>Niveau</th>
        <th>Divisions</th>
        <th>CoachID</th>
        <th>IDPack</th>
      </tr>
    </thead>
    <!-- INSERTING DATA INTO TABLE -->
    <tbody>
      
      <?php
      $sql ="select * from `joueur`";
      $result = mysqli_query($mysqli,$sql);
      if ($result) {
       while($row = mysqli_fetch_assoc($result)){
        $IDJoueur = $row['IDJoueur'];
        $Nomutilisateur = $row['Nomutilisateur'];
        $email= $row['email'];
        $Password  = $row['Password'];
        $CompteDiscord  = $row['CompteDiscord'];
        $Niveau = $row['Niveau'];
        $Divisions 	= $row['Divisions'];
        $CoachID = $row['CoachID'];
        $IDPack = $row['IDPack'];
        echo'
        <tr>
        <th scope="row">'.$IDJoueur.'</th>
        <td>'.$Nomutilisateur.'</td>
        <td>'.$email.'</td>
        <td>'.$Password.'</td>
        <td>'.$CompteDiscord.'</td>
        <td>'.$Niveau.'</td>
        <td>'.$Divisions.'</td>
        <td>'.$CoachID.'</td>
        <td>'.$IDPack.'</td>
        <td>
          <button type="button"  class ="upbtn"class="btn btn-primary"><a href="edit.php? editid='.$IDJoueur.'"class="text-light"> 
            Edit
            </a></button> 
        
          <button type="button"  class ="upbtn" name ="delete"class="btn btn-danger"><a href="delete.php? deleteid='.$IDJoueur.'"class ="text-light">
           Delete 
           </a></button>
        </td>
        </tr>';
       }
      }
     
      ?>

    </tbody>
  </table>
  
  </div>
  </div>
      </body>
      </html>

    
