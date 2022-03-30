<?php 
session_start();
require '../../Db/connect.php';
if (isset ( $_POST['validation'])) {
    $userid = $_POST['userid'];
    $suiteid = $_POST['suiteid'];
    $etabid = $_POST['etabid'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $request = "INSERT INTO `reservation` (`suiteId`, `startdate`, `enddate`, `etabId`, `userId`) VALUES ('$suiteid', '$startdate', '$enddate', '$etabid', '$userid')";
    $result = mysqli_query($con, $request);
if ($result) {
    exit ('<h3> Réservation effectué </h3>');
}else 
exit ('<h3>Validation impossible</h3>');
}