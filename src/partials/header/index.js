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
// $('#idioma').change(function () {

//   let opcionSeleccionada = $(this).val();


//   if (opcionSeleccionada === "es") {
//     let nuevaRuta = rutaActual.replace('/en', '');
//     let dd = window.location = "http://" + dominio + nuevaRuta;
//   } else if (opcionSeleccionada === "en") {
//     window.location = "http://" + dominio + "/en" + rutaActual;
//   }

  // if (opcionSeleccionada === "es") {
  //   let nuevaRuta = rutaActual.replace('/en', '');
  //   let dd = window.location = "http://" + dominio + "/mayta" + nuevaRuta;
  // } else if (opcionSeleccionada === "en") {
  //   window.location = "http://" + dominio + "/mayta/en" + rutaActual;
  // }
// });

if (rutaActual.indexOf("/en/") !== -1) {
  let ul = $(".idiomas");

  let items = ul.find("li");

  if (items.length >= 2) {
      items.eq(1).insertBefore(items.eq(0));
  }
} else {
}






