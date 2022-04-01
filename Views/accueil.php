<!DOCTYPE html>
<html lang="fr">

<?php 
 error_reporting(1);
 session_start();
 $nom = $_SESSION['nom'];
 $prenom = $_SESSION['prenom'];
?>


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include('./layout/navbar.php');
        
    ?>
    <title>Groupe Hypnos</title>

</head>

<body>

    <div>
        <div class="content">

        </div>
    </div>
</body>

</html>