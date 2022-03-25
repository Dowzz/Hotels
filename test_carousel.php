<?php
                    if (isset($_POST['updateRole'])) {
                        $userId = $_POST['userId'];
                      $sql = "UPDATE utilisateur SET ROLE = 'gérant' WHERE '$userId' = userId";
                      if (mysqli_query($con, $sql)) {
                          echo "<div class='message'><h3>Mise a jour effectué</3></div>";
                      }else {
                          echo "<script> alert ('mise a jour impossible !')</script>";
                      }
                    };
                    if (isset($_POST['degradeRole'])) {
                        $userId = $_POST['userId'];
                        $sql = "UPDATE utilisateur SET ROLE = 'client' WHERE '$userId' = userId";
                        if (mysqli_query($con, $sql)) {
                            echo "<div class='message'><h3>Mise a jour effectué</3></div>";
                        }else {
                            echo "<script> alert ('mise a jour impossible !')</script>";
                        }
                    }
                    if (isset($_POST['delUser'])) {
                        $userId = $_POST['userId'];   
                        $sql= "DELETE FROM utilisateur WHERE userId = $userId";
                        if (mysqli_query($con, $sql)) {
                            echo "<div class='message'><h3>supprimé</3></div>";
                        }else {
                            echo "<script> alert ('suppresion impossible')</script>";
                        }
                    }
                    ?>