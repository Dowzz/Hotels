<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/Password_Checker.css" rel='stylesheet' type='text/css' />
    <title>Liste des utilisateurs</title>
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
    ?>
</head>

<body>
    <script>
    $(document).ready(function() {

        load_data();
    });

    function load_data() {
        $.ajax({
            url: "./script/update_role.php",
            method: "POST",
            success: function(data) {
                $('#mytable').html(data);
            }
        });
    };
    </script>

    <div class="container_">
        <h3 class="mytitle">Liste des utilisateurs</h3>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Passage gérant</th>
                        <th>Retour client</th>
                    </tr>
                </thead>
                <tbody id="mytable">
                    <?php
    if (isset($_POST['updateRole'])) {
        $userId = $_POST['userId'];
      $sql = "UPDATE utilisateur set role = 'gérant' where '$userId' = userId";
      if (mysqli_query($con, $sql)) {
          echo "<div class='message'><h3>Mise a jour effectué</3></div>";
      }else {
          echo "<script> alert ('mise a jour impossible !')</script>";
      }
    };
    if (isset($_POST['degradeRole'])) {
        $userId = $_POST['userId'];
        $sql = "update utilisateur set role = 'client' where '$userId' = userId";
        if (mysqli_query($con, $sql)) {
            echo "<div class='message'><h3>Mise a jour effectué</3></div>";
        }else {
            echo "<script> alert ('mise a jour impossible !')</script>";
        }
    }
    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <?php include('./layout/footer.php') ?>
    </div>
</body>


</html>