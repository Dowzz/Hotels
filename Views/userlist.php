<h3 class="mytitle">Liste des utilisateurs</h3>
<p id="alert"></p>
<?php 
        include('./style/style.php');
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
<div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th>Suppression</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edition role</th>
            </tr>
        </thead>
        <tbody>
            <?php

$sql = "SELECT * FROM utilisateur where role <> 'admin'";
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
    ?>
            <tr>
                <td>
                    <button id="delUser" type="button" onClick=delUser(<?= $data['userId']?>)>supprimer</button>
                    </form>
                </td>
                <td><?= $data['name']?></td>
                <td><?= $data['prenom']?></td>
                <td><?= $data['email']?></td>
                <td><?= $data['role']?></td>

                <?php 
        if($data['role'] == "client") {
    ?>

                <td>
                    <form id="promoteUser" action="listing_utilisateur" method="post">
                        <input id="userId" name="userId" type="hidden" value=<?= $data['userId']?>>
                        <input id="upgrade-btn" type="submit" name="updateRole" value="Devient gérant">
                    </form>
                </td>

                <?php
        }else if ($data['role'] == "gérant") {
    ?>

                <td>
                    <form id="demoteUser" action="listing_utilisateur" method="post">
                        <input name="userId" type="hidden" value=<?= $data['userId']?>>
                        <input id="retro-btn" type="submit" name="degradeRole" value="Devient client">
                    </form>
                </td>

                <?php
        }
    ?>

            </tr>
            <?php
}

?>

        </tbody>
    </table>
</div>
<script>
//suppression utilisateur

function delUser(id) {
    $.ajax({
        url: "./script/manageUser.php",
        method: "post",
        data: {
            userId: id,
            delUser: 1,
        },
        success: function(response) {
            $("#alert").html(response);
        },
    });
};
</script>