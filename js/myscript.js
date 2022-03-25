// function one page

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
});
