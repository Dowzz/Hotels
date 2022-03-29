<h2 style='text-align: center;'>Liste des hotels</h2>
<div class="panel" id="listContainer">


    <?php 
include('../Db/connect.php');
error_reporting(1);
session_start();
$userId = $_SESSION['userid'];
$sql = "SELECT * FROM etablissement" ;
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
?>
    <div>
        <a class="etab_link" href="#"
            onClick=affichageInfos(<?= $data['etabId']?>)><?=$data['nom']?></a><?= $data['ville']?>
    </div>
    <?php
}
?>
</div>
<div class="container_">
    <div id="vitrineSuite">

    </div>
</div>

<script>
function affichageInfos(id) {
    $.ajax({
        url: "./script/vitrine/showsuite.php",
        type: "POST",
        data: {
            id: id,
            showSuite: 1,
        },
        success: function(response) {
            $("#vitrineSuite").html(response);
        }
    })
}
$(window).scroll(function() {

    var a = 140;
    var pos = $(window).scrollTop();
    if (pos > a) {
        $("#listContainer").css({
            position: 'fixed',
            top: "0",
            width: "100%",



        });
    } else {
        $("#listContainer").css({
            position: 'relative',
            width: '75%'

        });
    }
});
</script>