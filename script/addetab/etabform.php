<?php
session_start();
require '../../Db/connect.php';
if( isset( $_POST['addetabform'])) {
    $nom = $_POST["nom"];
    $nom = str_replace("'","\'",$nom);
    $city = $_POST["city"];
    $city = str_replace("'","\'",$city);
    $address = $_POST["address"];
    $address = str_replace("'","\'",$address);
    $desc = $_POST["desc"];
    $desc = str_replace("'","\'",$desc);
    $userId = $_POST['userId'];
    $request="INSERT INTO `etablissement`(`nom`, `ville`, `adresse`, `description`, `userId`) VALUES ('$nom', '$city', '$address', '$desc', '$userId')";
    $result = mysqli_query($con, $request);
    if($result) {
        exit ('<h3>établissement crée !</h3>');
    }else 
        exit ('<h3>ce gérant possède deja un établissement</3>');           
}
?>