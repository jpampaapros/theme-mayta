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

// let dominio = window.location.hostname;
let rutaActual = window.location.pathname;

if (rutaActual.indexOf("/en/") !== -1) {
  let ul = $(".idiomas");
  ul.each( function (index) {
    let items = $(this).find("li");

    if (items.length >= 2) {
      items.eq(1).insertBefore(items.eq(0));
    }
  })
};



