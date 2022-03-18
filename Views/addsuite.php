<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/Password_Checker.css" rel='stylesheet' type='text/css' />

    <title>mon établissement</title>
    <?php 
        include('./layout/header.php');
        include('./Db/connect.php');
        error_reporting(1);
        session_start();
        $type = $_SESSION['role'];
        if ($type == "client") {
           header("location:connexion");
        } if ($type=="") {
            header("location:connexion");
        }
        $userId = $_SESSION['userid'];

        $userId = $_SESSION['userid'];
    $sql = "SELECT * FROM etablissement where userId = '$userId'";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {
        ?>
    <h3 class="mytitle"><?= $data['nom']?></h3>
    <input name="etabId" type="hidden" value=<?= $data['etabId']?>>
    <h4 class="mytitle"> <?= $data['adresse']?> <?= $data['ville']?></h4>
    <?php
    }
    ?>
    <script>
    $(document).ready(function() {
        load_data();
    });

    function load_data() {
        $.ajax({
            url: "./script/update_etab.php",
            method: "POST",
            success: function(data) {
                $('#mycarousel').html(data);
            }
        });
    };
    </script>
</head>

<body>

    <body>
        <div class="container_ container_register">
            <div class="row addetabrow">
                <div class="col-md-12">
                    <div class="login-content">
                        <div class="section-title"></div>
                        <form action="ajout_établissement" method="post">
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-font"></i></span>
                                    <input type='text' required="required" name='nom' value="" class="form-control"
                                        placeholder="Nom de l'établissement">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-city"></i></span>
                                    <input type='text' required="required" name='city' value="" class="form-control"
                                        placeholder="Ville">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-location-dot"></i></span>
                                    <input type='text' required="required" name='address' value="" class="form-control"
                                        placeholder="Adresse">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-comment"></i></span>
                                    <input type="text" required="required" value="" name="desc" class="form-control"
                                        placeholder="Description">
                                </div>
                            </div>
                            <div class="login-btn add-btn">
                                <input type="submit" name="addetab" value="Ajouter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container_">
                <div id="mycarousel">

                </div>
            </div>
            <div class="col-md-12">
                <?php include('./layout/footer.php') ?>
            </div>

    </body>


</html>