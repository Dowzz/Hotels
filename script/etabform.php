<?php
session_start();
require '../Db/connect.php';
if( isset( $_POST['addetabform'])) {
    $nom = $_POST['nom'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $desc = $_POST['desc'];
    $userId = $_POST['userId'];
    $request="INSERT INTO `etablissement`(`nom`, `ville`, `adresse`, `description`, `userId`) VALUES ('$nom', '$city', '$address', '$desc', '$userId')";
    $result = mysqli_query($con, $request);
    if($result) {
        exit ('<font color="green">établissement crée !</font>');
    }else 
        exit ('<font color="red">ce gérant possède deja un établissement</font>');
  
    
    
}
?>