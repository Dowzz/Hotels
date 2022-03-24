$(window).on("load", function () {
  $(".content").load("accueil.html");
});
$(() => {
  $(function () {
    $(document.getElementsByClassName("navlink")).click(function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      url = this.href;
      $.get(url, function (data) {
        $(".content").html("");
        $(".content").addClass("detract");
        $(".content").html(data);
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
  $("#addetabform").submit(function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    var nom = document.getElementById("nom").value;
    var city = document.getElementById("city").value;
    var address = document.getElementById("address").value;
    var desc = document.getElementById("desc").value;
    var userId = document.getElementById("user").value;
    $.ajax({
      url: "./script/etabform.php",
      method: "POST",
      data: {
        addetabform: 1,
        nom: nom,
        city: city,
        address: address,
        desc: desc,
        userId: userId,
      },
      success: function (response) {
        $("#response").html(response);
      },
    });
  });
});
