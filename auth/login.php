<?php
session_start();
if (isset ($_SESSION['loggedIn'])) {
header('Location: accueil');
exit();
}
?>
<?php include('./Db/connect.php') ?>


<body>
    <div class="container_ container_register">
        <div class="row loginrow">
            <div>
                <div class="login-content">
                    <form id="loginform" action="connexion" method="post">
                        <div class="section-title">
                            <h3 class="mytitle">Connexion</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">

                                <input type='email' required="required" id="email" name='email' value=""
                                    class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group">

                                <input type="password" required="required" value="" id="password" name="password"
                                    class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="login-btn">
                            <input class="mybutton" type="submit" name="login" value="Connexion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p id="alert"></p>
    </div>
</body>

<script>
// login ajax
$("#loginform").submit(function(e) {
    e.preventDefault();
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    $.ajax({
        url: "./auth/signin.php",
        method: "POST",
        data: {
            login: 1,
            email: email,
            password,
            password,
        },
        success: function(response) {
            $("#alert").html(response);

            if (response.indexOf("redirection") >= 0) window.location.href = "";
        },
        dataType: "text",
    });
});
</script>