import $ from "jquery";


// PAGINA 404
if (window.location.href.indexOf("/en/") > -1) {
    $('.pag-404 p').text('Page not found');
    $('.pag-404 a').text('Return to home');
}