<?php 
include('../Db/connect.php');
?>

<?php
$sql = "SELECT * FROM utilisateur";
$rs = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($rs)) {
   
    ?>
<tr>
    <td><?= $data['name']?></td>
    <td><?= $data['prenom']?></td>
    <td><?= $data['email']?></td>
    <td><?= $data['role']?></td>
    <td>
        <form action="listing_utilisateur" method="post">
            <input name="userId" type="hidden" value=<?= $data['userId']?>>
            <input id="upgrade-btn" type="submit" name="updateRole" value="devient gérant">
        </form>
    </td>
    <td>
        <form name="myform2" action="listing_utilisateur" method="post">
            <input name="userId" type="hidden" value=<?= $data['userId']?>>
            <input id="retro-btn" type="submit" name="degradeRole" value="Retour client">
        </form>
    </td>
</tr>
<?php

}
   

    ?>