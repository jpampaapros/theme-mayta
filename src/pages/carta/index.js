import $ from "jquery";

$('.maridaje').mouseover(function(event) {
    let dataId = $(this).data('id'); 
    $('.price' + dataId).removeClass('hidden').addClass('block');

}).mouseout(function(event) {
    let dataId = $(this).data('id'); 
    $('.price' + dataId).removeClass('block').addClass('hidden');
});

