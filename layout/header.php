<script type="application/x-javascript">
addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>

<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/bc25e6281e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">


<nav class="navbar navbar-expand-md navbar-light" style="background-color: #f0f0f0;">
    <a class="navbar-brand" href="index.php"><img src="./img/hypnos.png" alt="">
        <span class="groupement">Groupement Hypnos</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class=" navbar-nav">
            <?php
                error_reporting(1);
                session_start();
                $type = $_SESSION['role'];

                if ($type == "admin") {
                    echo '
						<li class="nav-item"><a class="nav-link" href="ajout_établissement">Ajout d\'établissement</a></li>
                        <li class="nav-item"><a class="nav-link" href="listing_utilisateur">Liste des utilisateurs</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>						
						';
                }
                if ($type == "client") {
                    echo '
                        <li class="nav-item"><a class="nav-link" href="#">Mes reservations</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        ';
                } 
                if ($type == "gérant") {
                    echo '
                        <li class="nav-item"><a class="nav-link" href="mon_établissement">Mon établissement</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        ';

                    }
                if ($type=="") {
                    echo '
						<li class="nav-item"><a class="nav-link" href="connexion">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="devenir_client">Devenez client !</a></li>     
                        ';
                }
                ?>

        </ul>
    </div>
    <div class="clearfix"> </div>
</nav>