<?php 
    include('../Db/connect.php');
    error_reporting(1);
    session_start();
    if (isset($_POST['delUser'])) {
        $userId = $_POST['userId'];   
        $sql= "DELETE FROM utilisateur WHERE userId = $userId";
        $result= mysqli_query($con, $sql);
        if($result) {
            echo "<h3>utilisateur supprimé</3>";   
        }else {
            echo "<script> alert ('suppression impossible')</script>";
        }
    }




    ?>