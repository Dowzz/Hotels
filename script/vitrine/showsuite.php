<?php 
include('../../Db/connect.php');
error_reporting(1);
session_start();
if (isset($_POST['showSuite'])) {
$etabId = $_POST['id'];
$sql = "SELECT * FROM etablissement left join suite on etablissement.etabId = suite.etabId where etablissement.etabId = '$etabId'" ;
$rs = mysqli_query($con, $sql)or die(mysqli_error($con));
while($data = mysqli_fetch_array($rs)) {
$suiteId = $data['suiteId'];
if (!$suiteId){
echo "<h3 style='text-align: center;'>pas de suite enregistré</h3>";
}else {
?>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="gallery">

            <div class="image_default">
                <img class="showcase" src=<?= $data['image']?> alt="">
            </div>

            <div class="thumbsnail_list">
                <?php
        $suiteId = $data['suiteId'];
        $request = "SELECT * FROM imagegal WHERE suiteId = '$suiteId'";
        $result = mysqli_query($con, $request);
        while($value = mysqli_fetch_array($result)) {
        ?>
                <img class="thumb" src=<?= $value['link']?>>
                <?php
        }
        ?>
                <div class="overlay">
                    <a href="#mymodal" id="modal-btn" type="button" data-toggle="modal" data-target="#mymodal"
                        class="middle" data-id="<?php echo $data['suiteId']; ?>">Tout
                        voir</a>
                </div>
            </div>
        </div>
        <div class="details">
            <h3 class="panel-title"><?= $data['titre'] ?></h3>
            <p class="panel-text"><?= $data['descriptif'] ?></p>
        </div>
        <div class=" price">
            <p>Prix pour une nuit : <?= $data['prix'] ?> €</p>
            <a href=<?= $data['booking']?>>liens booking</a>
            <div class="login-btn">
                <input class="mybutton reservation" type="submit" value="Reserver">
                </input>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    }
}
}
?>
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="container_">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="fetched-data"></div>
                        </div>
                        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précedent</span></a>
                        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next"><span
                                class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('.caroussel').carousel({
    pause: "null"
})

$(document).ready(function() {
    $('#mymodal').on('show.bs.modal', function(e) {
        var rowid = $(e.relatedTarget).data('id');
        console.log(rowid);
        $.ajax({
            type: 'post',
            url: './script/Smanager/fetch_record.php',
            data: 'rowid=' + rowid,
            success: function(data) {
                $('.fetched-data').html(data);
            }
        })
    })
})