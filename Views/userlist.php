<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/Password_Checker.css" rel='stylesheet' type='text/css' />
    <title>Liste des utilisateurs</title>
    <?php include('./layout/header.php');
      include('./Db/connect.php');

    ?>
</head>

<body>
    <div class="container_">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody id="mytable">
                    <?php 
    $sql = "SELECT * FROM utilisateur";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {
       
        ?>
                    <tr>
                        <td><?= $data['nom']?></td>
                        <td><?= $data['prenom']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['role']?></td>
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