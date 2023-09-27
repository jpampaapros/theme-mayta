import $ from "jquery";
import LocomotiveScroll from 'locomotive-scroll';

const locoScroll = new LocomotiveScroll({
    el: document.querySelector(".locomotive-scroll"),
    smooth: true,
    multiplier: 0.8,
    class: 'in-view',
    reloadOnContextChange: true,
    smartphone: {
        smooth: false
    },
    tablet: {
        smooth: false
    },
    smoothMobile: 0,

});

// $(window).on("load", function () {
//     locoScroll.update();
// });

// setTimeout(() => {
//     locoScroll.update();
// }, 3000);