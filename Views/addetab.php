<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ajout établissement</title>

    <?php 
    
        include('./Db/connect.php');
        error_reporting(1);
        session_start();
        $type = $_SESSION['role'];
        if ($type == "client") {
       header("location:connexion");
        }elseif ($type== "") {
        header("location:connexion");
        }
   ?>
    <!-- function chargement des données -->
    <script>
    $(document).ready(function() {
        load_data();
    });

    function load_data() {
        var action = "addetab";
        $.ajax({
            url: "./script/update_data.php",
            type: "POST",
            data: {
                action: action
            },

            success: function(data) {
                $('#mytable').html(data);
            }
        });
    }
    </script>
</head>

<body>
    <div class="container_ container_register">
        <div class="row addetabrow">
            <div class="login-content">
                <form id="addetab" action="ajout_établissement" method="post">
                    <div class="section-title">
                        <h3 class="mytitle">Ajout d'établissement</h3>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-font"></i></span>
                            <input type='text' required="required" name='nom' id='nom' value="" class="form-control"
                                placeholder="Nom de l'établissement">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-city"></i></span>
                            <input type='text' required="required" name='city' id="city" value="" class="form-control"
                                placeholder="Ville">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-location-dot"></i></span>
                            <input type='text' required="required" name='address' id="address" value=""
                                class="form-control" placeholder="Adresse">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-comment"></i></span>
                            <input type="text" required="required" value="" name="desc" id="desc" class="form-control"
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

                                <option value=<?= $data['userId']?> id="utilisateur" name="userId">

                                    <?= $data['prenom']?> <?= $data['name']?>

                                </option>

                                <?php
                                };
                                ?>

                            </select>
                        </div>
                        <div class="login-btn add-btn">
                            <input type="submit" name="addetab" value="Ajouter">
                        </div>
                </form>
            </div>
            <p id="message"></p>
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
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
</body>


</html>

<?php 

?>