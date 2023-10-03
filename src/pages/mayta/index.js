import $ from "jquery";
import LocomotiveScroll from 'locomotive-scroll';
import ScrollTrigger from "gsap/ScrollTrigger";
import gsap from "gsap";

const scroller = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    // tablet: {
    //     smooth: false
    // },
    // smartphone: {
    //     smooth: false
    // }
});

gsap.registerPlugin(ScrollTrigger);

scroller.on('scroll', ScrollTrigger.update);

ScrollTrigger.scrollerProxy(
    '.section', {
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

ScrollTrigger.addEventListener('refresh', () => scroller.update())

ScrollTrigger.refresh()
