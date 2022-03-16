<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/Password_Checker.css" rel='stylesheet' type='text/css' />
    <title>ajout établissement</title>
    <?php include('./layout/header.php');
    include('./Db/connect.php');
   ?>
</head>

<body>
    <div class="container_ container_register">
        <div class="row addetabrow">
            <div class="col-sm-6">
                <div class="login-content">
                    <form action="ajout_établissement" method="post">
                        <div class="section-title">
                            <h3 class="mytitle">Ajout d'établissement</h3>
                        </div>
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
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa-solid fa-user"></i></span>
                                <label for="User">Choix du gérant</label>
                                <select name="User" id="user">
                                    <?php 
                                $sql = "SELECT * FROM utilisateur";
                                $rs = mysqli_query($con, $sql);
                                while ($data = mysqli_fetch_array($rs)) {
                                    ?>
                                    <option value=<?= $data['userId']?> name="userId"><?= $data['nom']?>
                                        <?= $data['prenom']?>
                                    </option>


                                    <?php
                                };
                                ?>
                                </select>
                            </div>
                            <div class="login-btn">
                                <input type="submit" name="addetab" value="Ajouter">
                            </div>

                    </form>
                </div>
            </div>
            <div class="container_">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom de l'établissement</th>
                                <th>Ville</th>
                                <th>Adresse</th>
                                <th>Description</th>
                                <th>Nom gérant</th>
                                <th>Prénom gérant</th>
                            </tr>
                        </thead>
                        <tbody id="mytable">
                            <?php 
    $sql = "SELECT * FROM etablissement LEFT JOIN utilisateur ON etablissement.userId = utilisateur.userId";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {
       
        ?>
                            <tr>
                                <td><?= $data['nom']?></td>
                                <td><?= $data['ville']?></td>
                                <td><?= $data['adresse']?></td>
                                <td><?= $data['description']?></td>
                                <td><?= $data['name']?></td>
                                <td><?= $data['prenom']?></td>
                            </tr>

                            <?php

    }

    ?>
                        </tbody>
                    </table>
                </div>
            </div>
</body>
<?php include('./layout/footer.php') ?>

</html>
<?php 
if (isset($_POST['addetab'])) {
    
    $nom = $_POST['nom'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $desc = $_POST['desc'];
    $userid = $_POST['User'];
    $sql = "INSERT INTO `etablissement`(`nom`, `ville`, `adresse`, `description`, `userId`) VALUES ('$nom', '$city', '$address', '$desc', '$userid')";
    if (mysqli_query($con, $sql)) {
        echo "<script> alert ('Ajout effectué !')</script>";
    }else {
        echo "<script> alert ('Ajout impossible.')</script>";
    };
    
};
?>