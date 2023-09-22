import $ from "jquery";
$(function () {
  $(".hamburger").click(function () {
    $("#slidemenu").toggleClass("active-menu");
    $("body").toggleClass("overflow-hidden");
  });
  $(".close-btn").click(function () {
    $("#slidemenu").toggleClass("active-menu");
    $("body").toggleClass("overflow-hidden");
  });
});
