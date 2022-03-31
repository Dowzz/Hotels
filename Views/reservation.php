<link rel="stylesheet" href="./css/datepickerstyle.css">

<?php 
include('./Db/connect.php');
error_reporting(1);
session_start();
$suiteId = $_SESSION['suiteId'];
if (isset ($_SESSION['loggedIn'])){
    $userId = $_SESSION['userid'];
    $request = "SELECT * FROM suite LEFT JOIN etablissement on suite.etabId = etablissement.etabId WHERE suite.suiteId = '$suiteId'";
    $res = mysqli_query($con, $request);
    while($data = mysqli_fetch_array($res)) {
    ?>
<h3 id="alert"></h3>
<div class="container_ container_register">
    <div class="row loginrow">
        <div class="col-lg-4">
            <div class="reservation-content">
                <form id="reservation_form" action="reservation" method="post">
                    <div class="section-title">
                        <h3 class="mytitle">Ma reservation</h3>
                    </div>
                    <div class="textbox-wrap">
                        <input type="hidden" id="userid" value=<?=$_SESSION['userid']?>>
                        <input type="hidden" id="suiteid" value=<?= $_SESSION['suiteId']?>>
                        <input type="hidden" id="etabid" value=<?= $data['etabId']?>>

                        <div class="input-group">
                            <div id="reservation_grid">
                                <div>
                                    <label for="hotelName">Nom de l'hotel</label>
                                    <p id="hotelName"> <?= $data['nom']?></p>
                                    <label for="hotelAddress">Adresse de l'hotel</label>
                                    <p id="hotelAddress"><?=$data['adresse']?> <?=$data['ville']?></p>

                                </div>
                                <div>
                                    <label for="suiteName">Suite</label>
                                    <p id="suiteName"> <?= $data['titre']?></p>
                                    <label for="price">Tarif nuit</label>
                                    <p id="price"><?= $data['prix']?> €</p>
                                </div>
                            </div>
                        </div>

                        <div class="datepicker date input-group">
                            <input type="text" id="startDate" placeholder="Date départ" name="startdate">

                        </div>
                        <div class="datepicker date input-group">
                            <input type="text" id="endDate" placeholder="Date de fin" name="enddate">

                        </div>
                    </div>
                    <div class="login-btn">
                        <input class="mybutton" type="submit" name="validres" value="Valider ma reservation">
                    </div>
                    <input type="button" id="btn" style="padding:5px 15px;" value="Fermer le calendrier">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
}
}else {
    echo " <h3 id='alert'>Vous devez etre connecté !</h3>";
    ?>
<div class=" container_ container_register">
    <div class="row loginrow">
        <div class="col-lg-4">
            <div class="login-content">
                <form id="loginform" action="connexion" method="post">
                    <div class="section-title">
                        <h3 class="mytitle">Connexion</h3>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-at"></i></span>
                            <input type='email' required="required" id="email" name='email' value=""
                                class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-lock"></i></span>
                            <input type="password" required="required" value="" id="password" name="password"
                                class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="login-btn">
                        <input class="mybutton" type="submit" name="login" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div>
    <p id="alert"></p>
</div>
<?php
}
?>


<script>
// login ajax
$("#loginform").submit(function(e) {
    e.preventDefault();
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    $.ajax({
        url: "./auth/signin.php",
        method: "POST",
        data: {
            login: 1,
            email: email,
            password,
            password,
        },
        success: function(response) {
            $("#alert").html(response);

            if (response.indexOf("redirection") >= 0) window.location.href = "";
        },
        dataType: "text",
    });
});
$(function() {
    // ACTIVATION DU DATEPICKER 
    $('#startDate').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy",
        autoclose: true,

    });
    $('#endDate').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy",
        autoclose: true,

    });
    $('#btn').on('click', function() {
        $("#startDate").datepicker('hide');
    })
});
$('#reservation_form').submit(function(e) {
    e.preventDefault();
    var userid = document.getElementById('userid').value;
    var suiteid = document.getElementById('suiteid').value;
    var etabid = document.getElementById('etabid').value;
    var startdate = document.getElementById('startDate').value;
    var enddate = document.getElementById('endDate').value;
    console.log(startdate, enddate)
    $.ajax({
        url: "./script/reservation/reservationvalidation.php",
        method: "post",
        data: {
            userid: userid,
            suiteid: suiteid,
            etabid: etabid,
            startdate: startdate,
            enddate: enddate,
            validation: 1,
        },
        success: function(response) {
            $('#alert').html(response);
        }
    })

})
</script>