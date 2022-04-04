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
<div class="container_ container_register">
    <h3 class="mytitle">Liste des utilisateurs</h3>
    <table class="table">
        <thead>
            <tr id="userfull">
                <th>Suppression</th>
                <th>Nom</th>
                <th id="userSurname">Prénom</th>
                <th>Email</th>
                <th id="userRole">Role</th>
                <th>Edition role</th>
            </tr>
            <tr id="userless">
                <th>Suppr</th>
                <th>Nom</th>
                <th>mail</th>
                <th>edition</th>
            </tr>
        </thead>
        <tbody id="mytbody">
        </tbody>
    </table>
</div>
<script>
//chargement de la page 
$(document).ready(function() {
    $.ajax({
        url: "./script/userlist/update_role.php",
        type: "post",
        success: function(response) {
            $("#mytbody").html(response);
        },
    })
});

//suppression utilisateur
function delUser(id) {
    $.ajax({
        url: "./script/userlist/manageUser.php",
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

// upgrade de l'utilisateur
function upUser(id) {
    $.ajax({
        url: "./script/userlist/manageUser.php",
        method: "post",
        data: {
            userId: id,
            updateRole: 1,
        },
        success: function(response) {
            $("#alert").html(response);
        }
    })
}

//downgrade de l'utilisateur
function downUser(id) {
    $.ajax({
        url: "./script/userlist/manageUser.php",
        method: "post",
        data: {
            userId: id,
            degradeRole: 1,
        },
        success: function(response) {
            $("#alert").html(response);
        }
    })
}
</script>