<?php
include('../../Db/connect.php');
$sql = "SELECT * FROM utilisateur where role <> 'admin'";
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
    ?>
<tr>
    <td>
        <button id="delUser" type="button" onClick=delUser(<?= $data['userId']?>)>supprimer</button>
    </td>
    <td><?= $data['name']?></td>
    <td id="userSurname"><?= $data['prenom']?></td>
    <td><?= $data['email']?></td>
    <td id="userRole"><?= $data['role']?></td>

    <?php 
        if($data['role'] == "client") {
    ?>
    <td>
        <button id="promoteUser" type="button" onClick=upUser(<?= $data['userId']?>)>Devenir
            gérant
        </button>
    </td>
    <?php
        }else if ($data['role'] == "gérant") {
    ?>
    <td>
        <button id="demoteUser" type="button" onClick=downUser(<?= $data['userId']?>)>Devient client
        </button>
    </td>
    <?php
        }
    ?>
</tr>
<?php
}

?>