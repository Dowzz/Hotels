<?php 
    include('../Db/connect.php');
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
    <td><?= $data['adresse']?></td>
    <td><?= $data['description']?></td>
    <td><?= $data['name']?></td>
    <td><?= $data['prenom']?></td>
    <td>
        <form action="ajout_établissement" id="deleteetab" method="post">
            <input type="hidden" id='etabId' name="etabId" value=<?= $data['etabId']?>>
            <input type="submit" id="delgal-btn" name="delEtab" value="Supprimer">
        </form>
    </td>
</tr>

<script>
$("#deleteetab").submit(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    var etabId = document.getElementById("etabId").value;
    $.ajax({
        url: "./script/delEtab.php",
        method: "POST",
        data: {
            etabId: etabId,
            delEtab: 1,
        },
        success: function(response) {
            $("#response").html(response);
        },
    });
    $.ajax({
        url: "./script/update_data.php",
        type: "post",
        success: function(response) {
            $("#mytable").html(response);
        },
    })
});
</script>
<?php
}
?>