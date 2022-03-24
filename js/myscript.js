$(window).on("load", function () {
  $(".content").load("accueil.html");
});
$(() => {
  $(function () {
    $(document.getElementsByClassName("navlink")).click(function (e) {
      e.preventDefault();
      url = this.href;
      $.get(url, function (data) {
        $(".content").addClass("detract");
        $(".content").html(data);
        if (window.matchMedia("(max-width: 1250px)").matches) {
          document
            .getElementById("check")
            .dispatchEvent(new MouseEvent("click", { shiftKey: true }));
        }
      });
    });
  });
  $("#loginform").submit(function (e) {
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
      success: function (response) {
        $("#response").html(response);

        if (response.indexOf("redirection") >= 0) window.location.href = "";
      },
      dataType: "text",
    });
  });
  $("#addetab").submit(function (e) {
    e.preventDefault();
    var nom = document.getElementById("nom").value;
    var city = document.getElementById("city").value;
    var address = document.getElementById("address").value;
    var desc = document.getElementById("desc").value;
    var utilisateur = document.getElementById("utilisateur").value;
    console.log(nom, city, address, desc, utilisateur);
    $.ajax({
      url: "./script/update_data.php",
      method: "post",
      data: {
        addetab: 1,
        nom: nom,
        city: city,
        address: address,
        desc: desc,
        utilisateur: utilisateur,
      },
      success: function (response) {
        $("#message").html(response);
      },
      dataType: "text",
    });
  });
});
