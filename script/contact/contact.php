<?php 
session_start();
require '../../Db/connect.php';
if (isset ($_POST['contact'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $request = "INSERT INTO `contact`(`email`, `message`) VALUE ('$email', '$message')";
    if (mysqli_query($con, $request)) {
        echo "message envoyé vous serez recontacté rapidement.";
    } else {
        echo "<script> alert ('envoi Impossible')</script>";
    };
}