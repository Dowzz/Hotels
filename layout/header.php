<script type="application/x-javascript">
addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>
<link href="./css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/bc25e6281e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="./img/hypnos.png" alt="">
                <span class="groupement">Groupement Hypnos</span></a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">


                <?php

                error_reporting(1);

                session_start();
                $type = $_SESSION['role'];

                if ($type == "admin") {
                    echo '
						<li><a href="ajout_établissement">Ajout d\'établissement</a></li>
                        <li><a href="listing_utilisateur">Liste des utilisateurs</a></li>
                        <li><a href="deconnexion">Déconnexion</a></li>						
						';
                }
                if ($type == "client") {
                    echo '
                        <li><a href="deconnexion">Déconnexion</a></li>
                        <li><a href="#">Mes reservations</a></li>
                        ';
                } if ($type=="") {
                    echo '
						<li><a href="connexion">Connexion</a></li>
                        <li><a href="devenir_client">Devenez client !</a></li>     
                        ';
                }
                ?>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>