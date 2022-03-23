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
});
