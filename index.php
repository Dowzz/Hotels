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
 }
 
 elseif(preg_match('#article-([0-9]+)#', $url, $params)) {
   $idArticle = $params[1];
   require 'article.php';
 } else {
   require './Views/404.php';
 }
  
 