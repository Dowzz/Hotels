<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <?php include('./layout/header.php');?>
</head>

<body>
    <?php

    $userid = $_SESSION['userid'];
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];

    ?>
    <h3 class="welcome">Bienvenue <?php echo $nom ?> <?php echo $prenom ?> </h3>

    <div></div>


</body>
<?php include('./layout/footer.php') ?>

</html>