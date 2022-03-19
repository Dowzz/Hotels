<?php 
include('../Db/connect.php');
error_reporting(1);
session_start();
$type = $_SESSION['role'];
        if ($type == "client") {
       header("location:connexion");
        } if ($type=="") {
        header("location:connexion");
        }
$userId = $_SESSION['userid'];

$sql = "SELECT * FROM etablissement left join suite on etablissement.etabId = suite.etabId where userId = '$userId'" ;
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
?>

<?php

};

?>