    <?php 
    include('./style/style.php');
    include('./Db/connect.php');
    error_reporting(1);
    session_start();
    $type = $_SESSION['role'];
    if ($type == "client") {
       header("location:connexion");
    }elseif ($type== "") {
        header("location:connexion");
    }
    $userId = $_SESSION['userid'];
    $sql = "SELECT * FROM etablissement where userId = '$userId'";
    $rs = mysqli_query($con, $sql);    
    if(mysqli_num_rows($rs) > 0){
    while($data = mysqli_fetch_array($rs)) {        
    ?>
    <h3 class="mytitle"><?= $data['nom']?></h3>
    <input name="etabId" type="hidden" value=<?= $data['etabId']?>>
    <h4 class="mytitle"> <?= $data['adresse']?> <?= $data['ville']?></h4>


    <body>
        <div class="container_ container_register">
            <div class="row addetabrow">
                <div class="col-md-12">
                    <div class="login-content">
                        <div class="section-title"></div>
                        <form id="ajout_suite" action="mon_établissement" method="post">
                            <div class="textbox-wrap">
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-font"></i></span>
                                    <input type='text' required="required" id="titre" name='titre' value=""
                                        class="form-control" placeholder="titre de la suite">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-link"></i></span>
                                    <input type='text' required="required" id="image" name='image' value=""
                                        class="form-control" placeholder="lien image">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-comment"></i></span>
                                    <input type='text' required="required" id="desc" name='descriptif' value=""
                                        class="form-control" placeholder="Descriptif">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-money-bill"></i></span>
                                    <input type="text" required="required" value="" id="prix" name="prix"
                                        class="form-control" placeholder="Prix">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon "><i class="fa-solid fa-link"></i></span>
                                    <input type="text" required="required" value="" id="booking" name="booking"
                                        class="form-control" placeholder="Lien Booking">
                                </div>
                                <input type="hidden" name="etabId" id="etabId" value=<?= $data['etabId']?>>
                            </div>
                            <div class="login-btn add-btn">
                                <input class="mybutton" type="submit" name="addsuite" value="Ajouter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p id="alert"></p>
            <div class="container_">

                <div id="mycontainer">
                </div>
            </div>
        </div>


    </body>

    <?php
    }
}else {
    echo "<h3 id='noetab'>pas d'établissement enregistré</h3>";
}

?>

    </html>


    <script>
$(document).ready(function() {
    $.ajax({
        url: "./script/Smanager/update_etab.php",
        type: "post",
        success: function(response) {
            $("#mycontainer").html(response);
        }
    })
})
$('#ajout_suite').submit(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    var titre = document.getElementById("titre").value;
    var image = document.getElementById("image").value;
    var desc = document.getElementById("desc").value;
    var prix = document.getElementById("prix").value;
    var book = document.getElementById("booking").value;
    var etabId = document.getElementById('etabId').value
    $.ajax({
        url: "./script/Smanager/manageSuite.php",
        method: "post",
        data: {
            addsuite: 1,
            titre: titre,
            image: image,
            desc: desc,
            prix: prix,
            book: book,
            etabId: etabId,
        },
        success: function(response) {
            $('#alert').html(response)
        }
    })
})
    </script>