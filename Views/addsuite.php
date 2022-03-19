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
    <!-- function chargement des données -->
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
    <div class="container_ container_register">
        <div class="row addetabrow">
            <div class="col-md-12">
                <div class="login-content">
                    <div class="section-title"></div>
                    <form id="ajout_suite" action="mon_établissement" method="post">
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-font"></i></span>
                                <input type='text' required="required" name='titre' value="" class="form-control"
                                    placeholder="titre de la suite">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-link"></i></span>
                                <input type='text' required="required" name='image' value="" class="form-control"
                                    placeholder="lien image">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-comment"></i></span>
                                <input type='text' required="required" name='descriptif' value="" class="form-control"
                                    placeholder="Descriptif">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-money-bill"></i></span>
                                <input type="text" required="required" value="" name="prix" class="form-control"
                                    placeholder="Prix">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-link"></i></span>
                                <input type="text" required="required" value="" name="booking" class="form-control"
                                    placeholder="Lien Booking">
                            </div>
                        </div>
                        <div class="login-btn add-btn">
                            <input type="submit" name="addsuite" value="Ajouter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container_">
            <div id="mycarousel">

            </div>
        </div>
    </div>
    <div class="col-md-12">

        <?php include('./layout/footer.php') ?>

    </div>

</body>

<?php
    if (isset($_POST['addsuite'])) {
        $titre = $_POST['titre'];
        $image = $_POST['image'];
        $desc = $_POST['descriptif'];
        $prix = $_POST['prix'];
        $book = $_POST['booking'];
        $sql = "INSERT INTO `suite`(`titre`, `image`, `descriptif`, `prix`, `booking`, `etabId`) VALUES ('$titre', '$image', '$desc', '$prix', '$book', '$etabId')";
        if (mysqli_query($con, $sql)) {
            echo "<div class='message'><h3>Ajout effectué</3></div>";
        }else {
            echo "<script> alert ('ajout suite impossible')</script>";
        }
    }
    if (isset($_POST['delSuite'])) {
        $suiteId = $_POST['suiteId'];   
        $sql= "DELETE FROM suite WHERE suiteId = $suiteId";
        if (mysqli_query($con, $sql)) {
            echo "<div class='message'><h3>supprimé</3></div>";
        }else {
            echo "<script> alert ('suppresion impossible')</script>";
        }
    }
    
    ?>

</html>