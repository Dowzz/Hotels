<?php
$con = mysqli_connect('i54jns50s3z6gbjt.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'giq9b6r0r8ea6sza', 'rzn7y1usqqc6dtzd', 'kl21f477te01demv'); /*mysqli_connect('127.0.0.1', 'root', '', 'hotelhypnos');*/
echo 'OK';
if (!$con) {
    die('Can`\'t connect to database');
}