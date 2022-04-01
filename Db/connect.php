<?php
$con = /*mysqli_connect('eu-cdbr-west-02.cleardb.net', 'bb9b675863a9a6', 'ccd6ce0f', 'heroku_4402f7cc31f41f2');*/ mysqli_connect('127.0.0.1', 'root', '', 'hotelhypnos');
if (!$con) {
    die('Can`\'t connect to database');
}