<?php
 
 $url = '';
 if(isset($_GET['url'])) {
   $url = $_GET['url'];
 }
 
  
 if($url == '') {
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
 
 