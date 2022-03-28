<?php
session_start();
require '../Db/connect.php';
if (isset($_POST['register'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $firstrequest = "SELECT * FROM utilisateur WHERE email = '$email'";
    $rs = mysqli_query($con, $firstrequest)or die(mysqli_error($con));
    $num_row = mysqli_num_rows($rs);
    if ($num_row == 0){
        $sql = "INSERT INTO `utilisateur`(`name`, `prenom`, `email`, `password`, `role`) VALUES ('$nom', '$prenom', '$email','$hashed_password', '$role')";
        if (mysqli_query($con, $sql)) {
            echo "<h3>Inscription réussie ! Vous pouvez vous connectez a présent !";
        } else {
            echo "<script> alert ('Inscription Impossible')</script>";
        };
    }else  {
        echo "<h3> Il exixte deja un utilisateur pour cette adresse email. </h3>";
    
    }
}



?>