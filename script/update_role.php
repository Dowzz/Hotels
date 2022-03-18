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
    <?php 
        if($data['role'] == "client") {
            ?>
    <td>

        <form action="listing_utilisateur" method="post">
            <input name="userId" type="hidden" value=<?= $data['userId']?>>
            <input id="upgrade-btn" type="submit" name="updateRole" value="Devient gérant">
        </form>
    </td>
    <?php
        }else if ($data['role'] == "gérant") {
            ?>
    <td>
        <form name="myform2" action="listing_utilisateur" method="post">
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