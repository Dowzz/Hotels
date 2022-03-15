<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/hypnos.png" alt="">
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
						<li><a href="#">Tableau de bord</a></li>
                        <li><a href="logout.php">Déconnexion</a></li>						
						';
                }
                if ($type == "client") {
                    echo '
                        <li><a href="logout.php">Déconnexion</a></li>
                        <li><a href="#">Mes reservations</a></li>
                        ';
                } else {
                    echo '
						<li><a href="login.php">Connexion</a></li>
                        <li><a href="register.php">Devenez client !</a></li>
                        <li><a href="test.php">test</a></li>
                        ';
                }

                ?>


            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>