<?php 
include('./Db/connect.php');
error_reporting(1);
session_start();
$suiteId = $_SESSION['suiteId'];
if (isset ($_SESSION['loggedIn'])){
    $userId= $_SESSION['userId'];
    var_dump($userId);
}else {
    
}
?>