<?php
include('../../Db/connect.php');
if (isset ($_POST['delres'])) {
    $resId = $_POST['resid'];
    $request = "DELETE FROM reservation WHERE resId = '$resId'";
    if (mysqli_query($con, $request)) {
        echo "<h3 id='response'>Annulation effectué</h3>";
    }else {
        echo "<script> alert ('Annulation impossible')</script>";
    }
}
?>
<script>
$.ajax({
    url: "./script/mes_reservations/manage_reservation.php",
    type: "post",
    success: function(response) {
        $(".tbodyres").html(response);
    },
})
</script>