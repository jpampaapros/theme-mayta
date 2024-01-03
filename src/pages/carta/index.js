import $ from "jquery";

$('.maridaje').mouseover(function (event) {
    let dataId = $(this).data('id');
    $('.price' + dataId).css({
        'opacity': '0.9',
        'transition': 'opacity 0.5s'
    });
}).mouseout(function (event) {
    let dataId = $(this).data('id');
    $('.price' + dataId).css({
        'opacity': '0',
        'transition': 'opacity 0.5s'
    });
});


