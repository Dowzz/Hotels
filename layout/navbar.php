<?php
                error_reporting(1);
                session_start();
                ?>
<nav class="navbar navbar-light" style="background-color: #f0f0f0;">
    <div class="brand">
        <a class="navbar-brand" href="index.php"><img src="./img/hypnos.png" alt="logo">
            <p class="groupement">Groupement Hotelier Hypnos</p>
        </a>
    </div>
    <div id="welcome">
        <h3 class="welcome">Bienvenue <?php echo $nom ?> <?php echo $prenom ?> </h3>
    </div>
    <div id="hamb">
        <a href="#" id="openButton">
            <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
    </div>
    <div id="myMenunav" class="sidenav">
        <a id="closeButton" href="#" class="close">X</a>
        <ul>
            <?php
             navbar();
                ?>
        </ul>
    </div>
    <div class="navigation">
        <ul>
            <?php
              navbar();
                ?>
        </ul>
    </div>
</nav>
<?php 
function navbar() {
    $type = $_SESSION['role'];
                if ($type == "admin") {
                    echo '
						<li class="nav-item"><a class="nav-link navlink" href="ajout_établissement">Ajout d\'établissement</a></li>
                        <li class="nav-item"><a class="nav-link navlink" href="listing_utilisateur">Liste des utilisateurs</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>						
						';
                }
                if ($type == "client") {
                    echo '
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link navlink" href="mes_reservations">Mes reservations</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        
                        ';
                } 
                if ($type == "gérant") {
                    echo '
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link navlink" href="mon_etablissement">Mon etablissement</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        ';

                    }
                if ($type=="") {
                    echo '
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
						<li class="nav-item"><a class="nav-link navlink" href="connexion">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link navlink" href="devenir_client">Devenez client !</a></li>     
                        ';
                }
}
?>
<script>
var menunav = document.getElementById("myMenunav");
var openBtn = document.getElementById("openButton");
var closeBtn = document.getElementById("closeButton");
var hideBtn = document.querySelectorAll("a");
hideBtn.forEach(function(item) {
    item.onclick = closeNav;
});
openBtn.onclick = openNav;
closeBtn.onclick = closeNav;



function openNav() {
    menunav.classList.add("active");
}

function closeNav() {
    menunav.classList.remove("active");
}
</script>