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
        $suiteId = $_dataa['suiteId'];
        var_dump($suiteId);                
        $sqli = "SELECT * FROM 'imagegal' WHERE suiteId = '$suiteId'";
        $rse = mysqli_query($con, $sqli);
        while($dataa = mysqli_fetch_array($rse)) {
        ?>
<img src=<?= $dataa['link']?>alt="">
<?php 
                }
                ?>