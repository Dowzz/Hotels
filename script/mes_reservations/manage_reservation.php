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
<tr>
    <td><?=$data['nom'] ?></td>
    <td><?=$data['adresse'] ?></td>
    <td><?=$data['ville'] ?></td>
    <td><?=$data['titre']?></td>
    <td><?=$newstartdate?></td>
    <td><?=$newenddate?></td>
    <td><?=$data['prix']?></td>
    <td><button id="demoteUser" type="button" onClick=cancel(<?= $data['resId']?>)>Annuler</button></td>
</tr>
<?php
}

?>