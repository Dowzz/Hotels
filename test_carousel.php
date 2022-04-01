<?php
                error_reporting(1);
                session_start();
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
                        <li class="nav-item"><a class="nav-link navlink" href="mes_reservations">Mes reservations</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        ';
                } 
                if ($type == "gérant") {
                    echo '
                        <li class="nav-item"><a class="nav-link navlink" href="mon_etablissement">Mon etablissement</a></li>
                        <li class="nav-item"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                        ';

                    }
                if ($type=="") {
                    echo '
						<li class="nav-item"><a class="nav-link navlink" href="connexion">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link navlink" href="devenir_client">Devenez client !</a></li>     
                        ';
                }
                ?>