<?php
session_start();
require '../../Db/connect.php';
if (isset($_POST['delEtab'])) {
    $etabId = $_POST['etabId'];   
    $sql= "DELETE FROM etablissement WHERE etabId = $etabId";
    if (mysqli_query($con, $sql)) {
        echo "<h3>supprimé</3>";
    }else {
        echo "<script> alert ('suppression impossible')</script>";
};
}
?>
<script>
$.ajax({
    url: "./script/addetab/update_data.php",
    type: "post",
    success: function(response) {
        $("#mytable").html(response);
    },
})
</script>