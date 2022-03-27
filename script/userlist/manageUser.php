<?php 
    include('../../Db/connect.php');
    error_reporting(1);
    session_start();
    if (isset($_POST['delUser'])) {
        $userId = $_POST['userId'];   
        $sql= "DELETE FROM utilisateur WHERE userId = $userId";
        $result= mysqli_query($con, $sql);
        if($result) {
            echo "<h3>utilisateur supprimé</3>";   
        }else {
            echo "<script> alert ('suppression impossible')</script>";
        }
    }
    if (isset($_POST['updateRole'])) {
        $userId = $_POST['userId'];
      $sql = "UPDATE utilisateur SET ROLE = 'gérant' WHERE '$userId' = userId";
      if (mysqli_query($con, $sql)) {
          echo "<h3>Mise a jour effectué</3>";
      }else {
          echo "<script> alert ('mise a jour impossible !')</script>";
      }
    };
    if (isset($_POST['degradeRole'])) {
        $userId = $_POST['userId'];
        $sql = "UPDATE utilisateur SET ROLE = 'client' WHERE '$userId' = userId";
        if (mysqli_query($con, $sql)) {
            echo "<h3>Mise a jour effectué</3>";
        }else {
            echo "<script> alert ('mise a jour impossible !')</script>";
        }
    }
    ?>
<script>
$.ajax({
    url: "./script/userlist/update_role.php",
    type: "post",
    success: function(response) {
        $("#mytbody").html(response);
    },
})
</script>