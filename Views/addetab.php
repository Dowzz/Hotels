<title>ajout établissement</title>

<?php 
        include('./style/style.php');
        include('./Db/connect.php');
        error_reporting(1);
        session_start();
        $type = $_SESSION['role'];
        if ($type == "client") {
       header("location:connexion");
        } if ($type=="") {
        header("location:connexion");
        }
   ?>
</head>

<body>
    <div class="container_ container_register">
        <div class="row addetabrow">
            <div class="login-content">
                <form id="addetabform" action="ajout_établissement" method="post">
                    <div class="section-title">
                        <h3 class="mytitle">Ajout d'établissement</h3>
                    </div>
                    <div class="textbox-wrap">
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-font"></i></span>
                            <input type='text' required="required" id="nom" name='nom' value="" class="form-control"
                                placeholder="Nom de l'établissement">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-city"></i></span>
                            <input type='text' required="required" id="city" name='city' value="" class="form-control"
                                placeholder="Ville">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-location-dot"></i></span>
                            <input type='text' required="required" id="address" name='address' value=""
                                class="form-control" placeholder="Adresse">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon "><i class="fa-solid fa-comment"></i></span>
                            <input type="text" required="required" id="desc" value="" name="desc" class="form-control"
                                placeholder="Description">
                        </div>
                        <div class="input-group" id="selector">
                            <label for="User">Choix du gérant</label>
                            <select name="User" id="user" value="">

                                <?php 
                            $sql = "SELECT * FROM utilisateur where role = 'gérant'";
                            $rs = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($rs)) {
                                ?>

                                <option value=<?= $data['userId']?> name="userId">

                                    <?= $data['prenom']?> <?= $data['name']?>

                                </option>

                                <?php
                                };
                                ?>

                            </select>
                        </div>
                        <div class="login-btn add-btn">
                            <input type="submit" name="addetab" value="Ajouter">
                        </div>
                </form>
                <p id="response"></p>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr class="fulltr">
                                    <th>Nom de l'établissement</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Description</th>
                                    <th>Nom gérant</th>
                                    <th>Prénom gérant</th>
                                    <th>Suppression</th>
                                </tr>
                                <tr class="collapsetr">
                                    <th>Nom</th>
                                    <th>Ville</th>
                                    <th>Adr.</th>
                                    <th>Desc.</th>
                                    <th>Gérant</th>
                                    <th>Prénom</th>
                                    <th>Suppr.</th>
                                </tr>
                            </thead>
                            <tbody id="mytable">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>


</html>

<?php 


if (isset($_POST['delEtab'])) {
    $etabId = $_POST['etabId'];   
    $sql= "DELETE FROM etablissement WHERE etabId = $etabId";
    if (mysqli_query($con, $sql)) {
        echo "<div class='message'><h3>supprimé</3></div>";
    }else {
        echo "<script> alert ('suppresion impossible')</script>";
};
}
?>