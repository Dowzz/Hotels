<?php 
session_start();
require '../../Db/connect.php';
if (isset ( $_POST['validation'])) {
    $userid = $_POST['userid'];
    $suiteid = $_POST['suiteid'];
    $etabid = $_POST['etabid'];
    
    //creation date début
    $startdate = $_POST['startdate'];
    $startdate = str_replace("/", "-", $startdate);
    $newstartdate = date('Y-m-d', strtotime($startdate));
    
    //creation date de fin
    $enddate = $_POST['enddate'];
    $enddate = str_replace("/", "-", $enddate);
    $newenddate = date('Y-m-d', strtotime($enddate));

    //request si dispo
    $test = "SELECT * FROM reservation WHERE '$newstartdate' < enddate AND '$newenddate' > startdate";
    $endtest = mysqli_query($con, $test);
    if (mysqli_num_rows($endtest) > 0) {
        echo '<h3 style="background-color:red">La suite ne sera pas disponible durant ces dates</h3>';
    }else {
        $request = "INSERT INTO `reservation` (`suiteId`, `startdate`, `enddate`, `etabId`, `userId`) VALUES ('$suiteid', '$newstartdate', '$newenddate', '$etabid', '$userid')";
        $result = mysqli_query($con, $request);
    if ($result) {
        exit ('<h3> Réservation effectué </h3>');
    }else 
    exit ('<h3> Validation impossible </h3>');
    }

}