<?php
include('./style/style.php');

$url = '';
if(isset($_GET['url'])) {
$url = $_GET['url'];
}

// gestion des alias pour les routes
if($url == '' || $url == 'accueil' ) {
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
} elseif ($url == 'mon_etablissement') {
require './Views/addsuite.php';
} elseif ($url == "reservation") {
require './Views/reservation.php';
} elseif ($url== "mes_reservations") {
require './Views/mes_reservations.php';
}