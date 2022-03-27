<?php
include('../Db/connect.php');
if (isset($_POST['addsuite'])) {
$titre = $_POST['titre'];
$image = $_POST['image'];
$desc = $_POST['desc'];
$prix = $_POST['prix'];
$book = $_POST['book'];
$etabId = $_POST['etabId'];
$sql = "INSERT INTO `suite`(`titre`, `image`, `descriptif`, `prix`, `booking`, `etabId`) VALUES ('$titre', '$image',
'$desc', '$prix', '$book', '$etabId')";
if (mysqli_query($con, $sql)) {
echo "
    <h3 id='response'>Ajout effectué</3>
";
}else {
echo "<script>
alert('ajout suite impossible')
</script>";
}
}
if (isset($_POST['delSuite'])) {
    $suiteId = $_POST['suiteId'];   
    $sql= "DELETE FROM suite WHERE suiteId = $suiteId";
    if (mysqli_query($con, $sql)) {
        echo "<h3 id='response'>supprimé</3>";
    }else {
        echo "<script> alert ('suppresion impossible')</script>";
};
}

?>