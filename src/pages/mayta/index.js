import $ from "jquery";
import LocomotiveScroll from 'locomotive-scroll';
import ScrollTrigger from "gsap/ScrollTrigger";
import gsap from "gsap";

const scroller = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

gsap.registerPlugin(ScrollTrigger);

scroller.on('scroll', ScrollTrigger.update);

ScrollTrigger.scrollerProxy(
    '.locomotive-scroll', {
        scrollTop(value) {
            return arguments.length ?
            scroller.scrollTo(value, 0, 0) :
            scroller.scroll.instance.scroll.y
        },
        getBoundingClientRect() {
            return {
                left: 0, top: 0, 
                width: window.innerWidth,
                height: window.innerHeight
            }
        }
    }
);

// ScrollTrigger.create({
//     trigger: '.image-mask',
//     scroller: '.container',
//     start: 'top+=30% 50%',
//     end: 'bottom-=40% 50%',
//     animation: gsap.to('.image-mask', {backgroundSize: '120%'}),
//     scrub: 2,
//     // markers: true
// })

ScrollTrigger.addEventListener('refresh', () => scroller.update())

ScrollTrigger.refresh()

// const locoScroll = new LocomotiveScroll({
//     el: document.querySelector(".locomotive-scroll"),
//     smooth: true,
//     multiplier: 0.8,
//     class: 'in-view',
//     reloadOnContextChange: true,
//     smartphone: {
//         smooth: false
//     },
//     tablet: {
//         smooth: false
//     },
//     smoothMobile: 0,

// });

// $(window).on("load", function () {
//     locoScroll.update();
// });

// setTimeout(() => {
//     locoScroll.update();
// }, 3000);