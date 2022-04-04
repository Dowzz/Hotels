<?php 
 include('./Db/connect.php');
 error_reporting(1);
 session_start();

 ?>
<h3 class="mytitle">Liste des contacts en attente</h3>
<div class="container_ container_register">
    <div class="contact_row">
        <div class="contact-content">
            <?php
            $request = "SELECT * FROM contact";
            $rs = mysqli_query($con, $request);
            while ($data = mysqli_fetch_array($rs)){
                ?>
            <div class=" contact-card">
                <h4><?=$data['email'] ?></h4>
                <div class="cadre">
                    <label for="messagecontact">Message :</label>
                    <p class="messagecontact"><?=$data['message'] ?></p>
                </div>
                <div class=" date">
                    <i><?= $data['date'] ?></i>
                </div>

            </div>
            <p><strong>-----------------------------------------------------</strong></p>
            <?php
            }
            ?>
        </div>
    </div>
</div>