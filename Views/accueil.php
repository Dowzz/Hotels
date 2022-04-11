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
        include ('./script/contact/chat.php');
        

        
    ?>
    <title>Groupe Hypnos</title>


</head>

<body>
    <h3 id="messagealert"></h3>
    <div>
        <div class="div-content">


        </div>

    </div>

</body>
<script>
$(document).ready(function() {
    $(".chat_icon").click(function(event) {
        $(".chat_box").toggleClass("active");
    });
});
</script>

</html>