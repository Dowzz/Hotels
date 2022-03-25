<?php 
include('../Db/connect.php');
error_reporting(1);
session_start();
$type = $_SESSION['role'];
if ($type == "client") {
   header("location:connexion");
} if ($type=="") {
    header("location:connexion");
};