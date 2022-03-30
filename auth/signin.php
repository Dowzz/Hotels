<?php
session_start();
require '../Db/connect.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM utilisateur WHERE email = '$email'";
    $rs = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($rs);
    $dbpassword = $data[4];

    if (password_verify($password, $dbpassword)) {

        $_SESSION['loggedIn'] = '1';
        $_SESSION['role'] = $data[5];
        $_SESSION['userid'] = $data[0];
        $_SESSION['email'] = $data[3];
        $_SESSION['nom'] = $data[1];
        $_SESSION['prenom'] = $data[2];
        
        
       exit('<h3>Connexion Réussie, redirection....</h3>');
    } else {
       exit('<font color="red"><h3>Vérifiez vos identifiants et mot de passe</h3></font>');
    }
}