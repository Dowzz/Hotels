<?php 
session_start();
require '../../Db/connect.php';
if (isset ($_POST['contact'])) {
    $prenom =$_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
   
    $request = "INSERT INTO `contact`(`nom`, `prenom`,`email`,`sujet`, `message`) VALUE ('$nom', '$prenom','$email', '$sujet', '$message')";
    if (mysqli_query($con, $request)) {
        echo "message envoyé vous serez recontacté rapidement.";
    } else {
        echo "<script> alert ('envoi Impossible')</script>";
    };
}