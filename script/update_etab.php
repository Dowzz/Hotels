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
<div class="panel panel-default">
    <div class="panel-body">
        <div class="gallery">
            <div class="image_default">
                <img class="showcase" src=<?= $data['image']?> alt="">
            </div>
            <span class="overlay">
                <?php
        $suiteId = $data['suiteId'];
        $request = "SELECT * FROM imagegal WHERE suiteId = '$suiteId'";
        $result = mysqli_query($con, $request);
        while($value = mysqli_fetch_array($result)) {
        ?>
                <img class="thumb" src=<?= $value['link']?>>
                <?php
        }
        ?>
            </span>
        </div>
        <div class="details">
            <h3 class="panel-title"><?= $data['titre'] ?></h3>
            <p><?= $data['descriptif'] ?></p>
        </div>
        <div class="price">
            <p>Prix pour une nuit : <?= $data['prix'] ?> €</p>
            <a href=<?= $data['booking']?>>liens booking</a>
        </div>
    </div>
</div>
<?php 
};

?>