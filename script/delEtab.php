<?php
session_start();
require '../Db/connect.php';
if (isset($_POST['delEtab'])) {
    $etabId = $_POST['etabId'];   
    $sql= "DELETE FROM etablissement WHERE etabId = $etabId";
    if (mysqli_query($con, $sql)) {
        echo "<div class='message'><h3>supprimé</3></div>";
    }else {
        echo "<script> alert ('suppresion impossible')</script>";
};
}
?>