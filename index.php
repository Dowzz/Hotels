<script type="application/x-javascript">
addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>

<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/bc25e6281e.js" crossorigin="anonymous"></script>
<script src="./js/myscript.js"></script>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
<link href="./css/Password_Checker.css" rel='stylesheet' type='text/css' />

<?php


$url = '';
if(isset($_GET['url'])) {
$url = $_GET['url'];
}

// gestion des alias pour les routes
if($url == '' || $url == 'accueil') {
require './Views/accueil.php';
} elseif ($url == 'connexion') {
require './auth/login.php';
} elseif ($url == 'devenir_client') {
require './auth/register.php';
} elseif ($url == 'deconnexion') {
require './auth/logout.php';
} elseif ($url == 'ajout_établissement') {
require './Views/addetab.php';
} elseif ($url == 'listing_utilisateur') {
require './Views/userlist.php';
} elseif ($url == 'mon_établissement') {
require './Views/addsuite.php';
}

 include('./layout/footer.php');