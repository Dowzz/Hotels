<!DOCTYPE html>
<html lang="fr">
<?php include('./layout/navbar.php');
 include('./style/style.php');
session_start();
if (isset ($_SESSION['loggedIn'])) {
header('Location: accueil');
exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Connexion</title>
    <?php include('./Db/connect.php') ?>
</head>

<body>
    <div class="container_ container_register">
        <div class="row loginrow">
            <div class="col-lg-4">
                <div class="login-content">
                    <form id="loginform" action="connexion" method="post">
                        <div class="section-title">
                            <h3 class="mytitle">Connexion</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-at"></i></span>
                                <input type='email' required="required" id="email" name='email' value=""
                                    class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-lock"></i></span>
                                <input type="password" required="required" value="" id="password" name="password"
                                    class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="login-btn">
                            <input type="submit" name="login" value="Connexion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p id="response"></p>
    </div>
</body>



</html>