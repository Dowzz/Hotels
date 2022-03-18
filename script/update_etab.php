<?php 
include('../Db/connect.php');
error_reporting(1);
session_start();
$userId = $_SESSION['userid'];
$sql = "SELECT * FROM etablissement left join suite on etablissement.etabId = suite.etabId where userId = '$userId'" ;
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
?>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src=<?= $data['image']?> alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?= $data['titre']?></h5>
        <p class="card-text"><?= $data['descriptif']?></p>
        <a href="#"><?= $data['prix']?></a>
        <a href="<?= $data['booking']?>">Liens Booking</a>


    </div>
</div>
<?php
}
?>