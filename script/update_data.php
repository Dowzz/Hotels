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
        <form action="ajout_établissement" id="delete" method="post">
            <input type="hidden" name="etabId" value=<?= $data['etabId']?>>
            <input type="submit" id="delgal-btn" name="delEtab" value="Supprimer">
        </form>
    </td>
</tr>

<?php
}
?>