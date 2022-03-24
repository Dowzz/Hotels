<?php 
    include('../Db/connect.php');
    error_reporting(1);
    session_start();
    $type = $_SESSION['role'];
    if ($type == "client") {
       header("location:connexion");
    }elseif ($type =="") {
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
if (isset($_POST['addetab'])) {
    $nom = $_POST['nom'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $desc = $_POST['desc'];
    $userid = $_POST['utilisateur'];
    $sql = "INSERT INTO `etablissement`(`nom`, `ville`, `adresse`, `description`, `userId`) VALUES ('$nom', '$city', '$address', '$desc', '$userid')";
    if (mysqli_query($con, $sql)) {
        exit ("<div class='message'><h3> <font color='green'>Ajout effectué</font></3></div>");
    }else {
        exit ("<div class='message'><h3><font color='red'>Imposible d'ajouter l'établissement</font></3></div>");
    };  
}

if (isset($_POST['delEtab'])) {
    $etabId = $_POST['etabId'];   
    $sql= "DELETE FROM etablissement WHERE etabId = $etabId";
    if (mysqli_query($con, $sql)) {
        echo "<div class='message'><h3>supprimé</3></div>";
    }else {
        echo "<script> alert ('suppression impossible')</script>";
};
}
?>