import { ScrollTrigger } from "gsap/ScrollTrigger";
import {gsap} from "gsap";

gsap.registerPlugin(ScrollTrigger);

gsap.to(".js--welcome-img", {
  scale: 1.2,
  scrollTrigger: {
    trigger: ".js--welcome-animation",
    start: "top center",
    end: "bottom center",
    scrub: 1
  }
});