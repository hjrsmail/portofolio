import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { gsap } from "gsap";
import { ExpoScaleEase } from "gsap/EasePack";

import { InertiaPlugin } from "gsap/InertiaPlugin";
import { MotionPathHelper } from "gsap/MotionPathHelper";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// ScrollSmoother requires ScrollTrigger
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { SplitText } from "gsap/SplitText";
import { TextPlugin } from "gsap/TextPlugin";
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin";

gsap.registerPlugin(
    InertiaPlugin,
    MotionPathHelper,
    ScrollTrigger,
    ScrollSmoother,
    ScrollToPlugin,
    SplitText,
    TextPlugin,
    ExpoScaleEase,
    DrawSVGPlugin
);

let lastScrollTop = 0;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scroll ke bawah, sembunyikan navbar
        navbar.style.top = "-80px";
    } else {
        // Scroll ke atas, tampilkan navbar
        navbar.style.top = "0";
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

gsap.from("#navbar", { duration: 1, y: "-100%", opacity: 0, ease: "bounce" });
gsap.from("#myPict", { duration: 1, x: 60, opacity: 1, delay: 2 });
gsap.from(".prtf", { duration: 1, x: -50, opacity: 0, ease: "back", delay: 2 });
gsap.from(".flst", {
    duration: 1,
    x: -60,
    opacity: 0,
    ease: "bounce",
    delay: 2,
});
gsap.from(".t-top", { duration: 1, x: 70, opacity: 0 });
gsap.from(".t-bot", { duration: 1, x: -70, opacity: 0 });
gsap.from(".aboutMe", { duration: 1, x: -70, opacity: 0 });
gsap.to(".cprt", {
    duration: 2,
    text: "Copyright &copy; 2022. All rights reserved.",
    delay: 2,
});
gsap.from(".logo", {
    duration: 1,
    x: -60,
    opacity: 0,
    ease: "bounce",
    delay: 2,
});

$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    $("#skills").css({});
});

var swiper = new Swiper(".pageThree", {
    pagination: {
        el: ".swiper-pagination",
    },
});
