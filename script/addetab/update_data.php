<?php 
    include('../../Db/connect.php');
    error_reporting(1);
    session_start();
    $type = $_SESSION['role'];
    if ($type == "client") {
       header("location:connexion");
    } if ($type=="") {
        header("location:connexion");
    }
    $sql = "SELECT * FROM etablissement LEFT JOIN utilisateur ON etablissement.userId = utilisateur.userId";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {     
?>
<tr>
    <td><?= $data['nom']?></td>
    <td><?= $data['ville']?></td>
    <td id="etabAddress"><?= $data['adresse']?></td>
    <td id="Description"><?= $data['description']?></td>
    <td id="ownerName"><?= $data['name']?></td>
    <td id="ownerSurname"><?= $data['prenom']?></td>
    <td>
        <button id="deleteetab" type="button" onClick=deleteetab(<?= $data['etabId']?>)>Supprimer</button>


    </td>
</tr>


<?php
}
?>
<script>
function deleteetab(id) {
    $.ajax({
        url: "./script/addetab/delEtab.php",
        method: "POST",
        data: {
            etabId: id,
            delEtab: 1,
        },
        success: function(response) {
            $("#alert").html(response);
        },
    });
};
</script>