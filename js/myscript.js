// function one page

$(window).on("load", function () {
  $(".div-content").load("./Views/vitrine.php");
});
$(() => {
  $(function () {
    $(document.getElementsByClassName("navlink")).click(function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      url = this.href;
      $.get(url, function (data) {
        $(".div-content").html("");
        $(".div-content").addClass("detract");
        $(".div-content").html(data);
      });
    });
  });
});
