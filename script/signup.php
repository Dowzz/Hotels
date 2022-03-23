<?php 
include "./Db/connect.php";

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM utilisateur WHERE email = '$email'";
$rs = mysqli_query($con, $sql);
$data = mysqli_fetch_array($rs);
$dbpassword = $data[4];
if (password_verify($password, $dbpassword)) {

    session_start();
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
    

    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script> alert ('Ce compte n\'existe pas')</script>";
}