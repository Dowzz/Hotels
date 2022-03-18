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
        <p><?= $data['prix']?> €</p>
        <a href="<?= $data['booking']?>">Liens Booking</a>
        <button class="galerie-btn"><a href="#" data-toggle="modal" data-target="#myModal">accès
                galerie</a></button>
    </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Galerie</h1>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" value="">
                    Annuler</i>
                </button>

            </div>
        </div>
    </div>
</div>
<?php
}
?>