<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
 error_reporting(1);
 session_start();
 $nom = $_SESSION['nom'];
 $prenom = $_SESSION['prenom'];
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include('./layout/navbar.php');
        
    ?>
    <title>Accueil</title>
    <h3 class="welcome">Bienvenue <?php echo $nom ?> <?php echo $prenom ?> </h3>
</head>

<body>

    <div>
        <div class="content">

        </div>
    </div>
</body>

</html>