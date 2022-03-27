<?php
session_start();
require '../../Db/connect.php';
if( isset( $_POST['addetabform'])) {
    $nom = $_POST['nom'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $desc = $_POST['desc'];
    $userId = $_POST['userId'];
    $request="INSERT INTO `etablissement`(`nom`, `ville`, `adresse`, `description`, `userId`) VALUES ('$nom', '$city', '$address', '$desc', '$userId')";
    $result = mysqli_query($con, $request);
    if($result) {
        exit ('<h3>établissement crée !</h3>');
    }else 
        exit ('<h3>ce gérant possède deja un établissement</3>');           
}
?>