<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/Password_Checker.css" rel='stylesheet' type='text/css' />
    <title>Connexion</title>
    <?php include('header_link.php') ?>
    <?php include('connect.php') ?>
</head>

<body>
    <?php
    include('header.php');

    ?>

    <div class="container_register">
        <div class="row loginrow">
            <div class="col-lg-4">
                <div class="login-content">
                    <form action="login.php" method="post">
                        <div class="section-title">
                            <h3 class="mytitle">Connexion</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type='email' required="required" name='email' value="" class="form-control"
                                    placeholder="Email">
                                <input type="password" required="required" value="" name="password" class="form-control"
                                    placeholder="Password">
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

    <?php include('footer.php') ?>

</body>

</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];



    $sql = "select * from utilisateur where email = '$email'";

    $rs = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($rs);
    $dbpassword = $data[4];


    if (password_verify($password, $dbpassword)) {

        session_start();
        $role = $data[5];
        $userid = $data[0];
        $email = $data[3];
        $nom = $data[1];
        $prenom = $data[2];


        $_SESSION['role'] = $role;
        $_SESSION['userid'] = $userid;
        $_SESSION['email'] = $email;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;

        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script> alert ('Ce compte n\'existe pas')</script>";
    }
}