<!DOCTYPE html>
<html lang="fr">
<?php 
 error_reporting(1);
 session_start();
 $nom = $_SESSION['nom'];
 $prenom = $_SESSION['prenom'];
 include('./layout/navbar.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

</head>

<body>
    <h3 class="welcome">Bienvenue <?php echo $nom ?> <?php echo $prenom ?> </h3>
    <div>
        <div class="content"></div>





    </div>


</body>


</html>