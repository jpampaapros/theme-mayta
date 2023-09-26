import $ from "jquery";
$(function () {
  $(".hamburger").click(function () {
    $("#slidemenu").removeClass("hidden").addClass("block").animate({ left: 0 }, 800);
    return false;
  });
  $(".hamburger2").click(function () {
    $("#slidemenu").animate({ left: '500px' }, 800, function () {
      $(this).removeClass("block").addClass("hidden");
    });
    return false;
  });
});
