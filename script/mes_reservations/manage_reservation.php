<?php 
include('../../Db/connect.php');
session_start();
$userId = $_SESSION['userid'];
$request = "SELECT * from reservation LEFT JOIN etablissement on reservation.etabId = etablissement.etabId LEFT JOIN suite on reservation.suiteId = suite.suiteId WHERE reservation.userId = $userId";
$res = mysqli_query($con, $request);
while($data=mysqli_fetch_array($res)) {
    $startdate = $data['startdate'];
    $newstartdate = date('d m Y', strtotime($startdate));
    $enddate = $data['enddate'];
    $newenddate = date('d m Y', strtotime($enddate));
    ?>

<div class="reserve-card">
    <h4><?=$data['nom'] ?></h4>
    <p>Adresse : <?=$data['adresse'] ?></p>
    <p>Ville : <?=$data['ville'] ?></p>
    <p>Nom de la suite : <?=$data['titre']?></p>
    <p>Date de départ : <?=$newstartdate?></p>
    <p>Date de fin : <?=$newenddate?></p>
    <p>Tarif nuit : <?=$data['prix']?></p>
    <button id="demoteUser" type="button" onClick=cancel(<?= $data['resId']?>)>Annuler</button>

</div>
<?php
}

?>