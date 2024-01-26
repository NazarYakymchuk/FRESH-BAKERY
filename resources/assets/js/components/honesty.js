import { ScrollTrigger } from "gsap/ScrollTrigger";
import {gsap} from "gsap";

gsap.registerPlugin(ScrollTrigger);

animateHonest(".js--animation-first", ".js--img-first");
animateHonest(".js--animation-third", ".js--img-third");
animateHonestSecond();

function animateHonest(parent, el) {
  gsap.to(el, {
    scale: 1.2,
    scrollTrigger: {
      trigger: parent,
      start: "top center",
      end: "bottom top",
      scrub: 1
    }
  })
}
function animateHonestSecond() {
  gsap.to(".js--img-second", {
    scale: 1.6,
    scrollTrigger: {
      trigger: '.js--animation-second',
      start: "top center",
      end: "bottom top",
      scrub: 1
    }
  })
}