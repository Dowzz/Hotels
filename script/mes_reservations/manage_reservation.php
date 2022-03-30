<?php 
include('../../Db/connect.php');
session_start();
$userId = $_SESSION['userid'];
$request = "SELECT * from reservation LEFT JOIN etablissement on reservation.etabId = etablissement.etabId LEFT JOIN suite on reservation.suiteId = suite.suiteId WHERE reservation.userId = $userId";
$res = mysqli_query($con, $request);
while($data=mysqli_fetch_array($res)) {
    ?>
<tr>
    <td><?=$data['nom'] ?></td>
    <td><?=$data['adresse'] ?></td>
    <td><?=$data['ville'] ?></td>
    <td><?=$data['titre']?></td>
    <td><?=$data['startdate']?></td>
    <td><?=$data['enddate']?></td>
    <td><?=$data['prix']?></td>
    <td><button id="demoteUser" type="button" onClick=cancel(<?= $data['resId']?>)>Annuler</button></td>
</tr>
<?php
}

?>