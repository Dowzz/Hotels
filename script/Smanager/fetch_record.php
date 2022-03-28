<?php
include('../../Db/connect.php');
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM suite WHERE suiteId = '$id'";
    $rs = mysqli_query($con, $sql);
    while($data = mysqli_fetch_array($rs)) {
        ?>

<div class="carousel-item active">
    <img class="bigthumb" src=<?= $data['image'] ?>alt="">
</div>
<?php
    }
    $id2 = $_POST['rowid'];
    $sql2 = "SELECT * FROM imagegal WHERE suiteId = '$id'";
    $rs2 = mysqli_query($con, $sql2);
    while($data2 = mysqli_fetch_array($rs2)) {
?>
<div class="carousel-item">
    <img class="bigthumb" src=<?= $data2['link'] ?> alt="">
</div>
<?php
    }
}
?>