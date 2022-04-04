<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    <div class="navhotel">
        <a class="etab_link" href="#"
            onClick=affichageInfos(<?= $data['etabId']?>)><?=$data['nom']?></a><?= $data['ville']?>
    </div>
    <?php
}
?>
</div>
<div id="menu">
    <a href="#" id="openBtn">
        <span class="burger-icon">
            Voir tout les hotels
        </span>

    </a>
</div>
<div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close">X</a>
    <ul>

        <?php 
include('../Db/connect.php');
error_reporting(1);
session_start();
$userId = $_SESSION['userid'];
$sql = "SELECT * FROM etablissement" ;
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
?>
        <li>
            <a class="etab_link" href="#" onClick=affichageInfos(<?= $data['etabId']?>)><?=$data['nom']?>
            </a>
        </li>
        <?php
}
?>
    </ul>
</div>
<div class="container_">
    <div id="vitrineSuite">

    </div>
</div>

<script>
$(document).ready(function() {
    $.ajax({
        url: "./script/vitrine/showsuite.php",
        type: "post",
        data: {
            start: 1,
        },
        success: function(response) {
            $("#vitrineSuite").html(response);
        },
    });
});
var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");


openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
    sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    sidenav.classList.remove("active");
}

function affichageInfos(id) {
    $("#vitrineSuite").html('');
    $.ajax({
        url: "./script/vitrine/showsuite.php",
        type: "POST",
        data: {
            id: id,
            showSuite: 1,
        },
        success: function(response) {
            $("#vitrineSuite").html(response);
            closeNav();

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