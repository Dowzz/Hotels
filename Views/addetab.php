<?php 
include('./style/style.php');
include('./Db/connect.php');
error_reporting(1);
session_start();
$type = $_SESSION['role'];
if ($type == "client") {
    header("location:connexion");
} if ($type=="") {
header("location:connexion");
}
   ?>
<div class="container_ container_register">
    <div class="row addetabrow">
        <div class="login-content">
            <form id="addetabform" action="ajout_établissement" method="post">
                <div class="section-title">
                    <h3 class="mytitle">Ajout d'établissement</h3>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group">

                        <input type='text' required="required" id="nom" name='nom' value="" class="form-control"
                            placeholder="Nom de l'établissement">
                    </div>
                    <div class="input-group">

                        <input type='text' required="required" id="city" name='city' value="" class="form-control"
                            placeholder="Ville">
                    </div>
                    <div class="input-group">

                        <input type='text' required="required" id="address" name='address' value="" class="form-control"
                            placeholder="Adresse">
                    </div>
                    <div class="input-group">

                        <input type="text" required="required" id="desc" value="" name="desc" class="form-control"
                            placeholder="Description">
                    </div>
                    <div class="input-group" id="selector">
                        <label for="User">Choix du gérant</label>
                        <select name="User" id="user" value="">

                            <?php 
                            $sql = "SELECT * FROM utilisateur where role = 'gérant'";
                            $rs = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($rs)) {
                                ?>

                            <option value=<?= $data['userId']?> name="userId">

                                <?= $data['prenom']?> <?= $data['name']?>

                            </option>

                            <?php
                                };
                                ?>

                        </select>
                    </div>
                    <div class="login-btn add-btn">
                        <input class="mybutton" type="submit" id="updateetab" name="addetab" value="Ajouter">
                    </div>
            </form>
            <p id="alert"></p>
        </div>

        <div class="container">
            <div style="overflow-x:auto;">
                <table class="table">
                    <thead>
                        <tr class="fulltr">
                            <th>Nom de l'établissement</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>Description</th>
                            <th>Nom gérant</th>
                            <th>Prénom gérant</th>
                            <th>Suppression</th>
                        </tr>
                        <tr class="collapsetr">
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Adr.</th>
                            <th>Desc.</th>
                            <th>Gérant</th>
                            <th>Prénom</th>
                            <th>Suppr.</th>
                        </tr>
                    </thead>
                    <tbody id="mytable">
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<script>
$(document).ready(function() {
    $.ajax({
        url: "./script/addetab/update_data.php",
        type: "post",
        success: function(response) {
            $("#mytable").html(response);
        },
    });
});
// ajax ajout établissement
$("#addetabform").submit(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    var nom = document.getElementById("nom").value;
    var city = document.getElementById("city").value;
    var address = document.getElementById("address").value;
    var desc = document.getElementById("desc").value;
    var userId = document.getElementById("user").value;
    $.ajax({
        url: "./script/addetab/etabform.php",
        method: "POST",
        data: {
            addetabform: 1,
            nom: nom,
            city: city,
            address: address,
            desc: desc,
            userId: userId,
        },
        success: function(response) {
            $("#alert").html(response);
        },
    });
    $.ajax({
        url: "./script/addetab/update_data.php",
        type: "post",
        success: function(response) {
            $("#mytable").html(response);
        },
    });
});
</script>

</html>

<?php 