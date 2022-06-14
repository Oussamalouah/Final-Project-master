<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $IDJoueur = $_GET['deleteid'];
    $sql = "delete from `joueur` where IDJoueur=$IDJoueur";
    $result = mysqli_query($mysqli,$sql);
    


}

if ($result) {
    
    header('location:ADMIN.php');
}
?>