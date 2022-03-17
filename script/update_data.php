<?php 
include('../Db/connect.php');
    $sql = "SELECT * FROM etablissement LEFT JOIN utilisateur ON etablissement.userId = utilisateur.userId";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {
       
        ?>
<tr>
    <td>
        <p><?= $data['nom']?></p>
    </td>
    <td><?= $data['ville']?></td>
    <td><?= $data['adresse']?></td>
    <td><?= $data['description']?></td>
    <td><?= $data['name']?></td>
    <td><?= $data['prenom']?></td>
</tr>

<?php

    }

    ?>