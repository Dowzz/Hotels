<!DOCTYPE html>
<html lang="fr">
<?php 
 include('./style/style.php');
 include('./Db/connect.php');
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


    <title>Devenir client</title>

</head>

<body>
    <div class="container_ container_register">
        <div class="row registerrow">
            <div class="col-sm-6">
                <div class="login-content">
                    <form id="registerform" action="devenir_client" method="post">
                        <div class="section-title">
                            <h3 class="mytitle">Devenez Client</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type='text' required="required" id="nom" name='nom' value="" class="form-control"
                                    placeholder="Nom">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type='text' required="required" id="prenom" name='prenom' value=""
                                    class="form-control" placeholder="Prenom">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-at"></i></span>
                                <input type='email' required="required" id="email" name='email' value=""
                                    class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-lock"></i></span>
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    id="psw" required="required" value="" name="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa-solid fa-lock"></i></span>
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    id="confirmPassword" required="required" value="" name="confirmpassword"
                                    class="form-control" placeholder="confirmation du Password">
                            </div>
                        </div>
                        <div class="login-btn">
                            <input class="mybutton" type="submit" name="register" value="Inscription">
                        </div>
                        <div id="message">
                            <h5>Le password doit contenir : </h5>
                            <p id="letter" class="invalid">Au moins une lettre <b>minuscule</b></p>
                            <p id="capital" class="invalid">Au moins une lettre <b>majuscule</b> </p>
                            <p id="number" class="invalid">Au moins un <b>nombre</b></p>
                            <p id="length" class="invalid">Un minimum de <b>8 lettres</b></p>
                        </div>
                        <div id="confirmMessage">
                            <p id="match" class="invalid">les mots de passes doivent correspondre</b></p>
                        </div>
                    </form>
                </div>
                <div id="alert"></div>
            </div>
            <script>
            var myInput = document.getElementById("psw");
            var mysecondInput = document.getElementById("confirmPassword");

            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");
            var match = document.getElementById("match");


            myInput.onfocus = function() {
                document.getElementById("message").style.display = "block";
            }
            mysecondInput.onfocus = function() {
                document.getElementById("confirmMessage").style.display = "block";
            };


            myInput.onblur = function() {
                document.getElementById("message").style.display = "none";
            }
            mysecondInput.onblur = function() {
                document.getElementById("confirmMessage").style.display = "none";
            };


            myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if (myInput.value.match(lowerCaseLetters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }

                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if (myInput.value.match(upperCaseLetters)) {
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                }

                // Validate numbers
                var numbers = /[0-9]/g;
                if (myInput.value.match(numbers)) {
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                }

                // Validate length
                if (myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }
            }
            mysecondInput.onkeyup = function() {
                if (myInput.value === mysecondInput.value) {
                    match.classList.remove("invalid");
                    match.classList.add("valid");
                } else {
                    match.classList.remove("valid");
                    match.classList.add("invalid");
                }
            }
            $('#registerform').submit(function(e) {
                e.preventDefault();
                var nom = document.getElementById('nom').value;
                var prenom = document.getElementById('prenom').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('psw').value;
                var role = "client";
                $.ajax({
                    url: "./auth/signup.php",
                    method: "POST",
                    data: {
                        register: 1,
                        nom: nom,
                        prenom: prenom,
                        email: email,
                        password: password,
                        role: role,
                    },
                    success: function(response) {
                        $("#alert").html(response);
                    },
                    dataType: "text",
                });

            })
            </script>

        </div>
    </div>

</body>
<script>

</script>

</html>