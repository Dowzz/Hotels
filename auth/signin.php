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
        $role = $data[5];
        $userid = $data[0];
        $email = $data[3];
        $nom = $data[1];
        $prenom = $data[2];

        $_SESSION['role'] = $role;
        $_SESSION['userid'] = $userid;
        $_SESSION['email'] = $email;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        
       exit('<h3>Connexion Réussie, redirection....</h3>');
    } else {
       exit('<font color="red"><h3>Vérifiez vos identifiants et mot de passe</h3></font>');
    }
}