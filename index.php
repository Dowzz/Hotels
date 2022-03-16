<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>



</head>

<body>

    <?php include('header.php');

    $userid = $_SESSION['userid'];
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];

    ?>
    <h3 class="welcome">Bienvenue <?php echo $nom ?> <?php echo $prenom ?> </h3>

</body>
<?php include('footer.php') ?>

</html>