import { ScrollTrigger } from "gsap/ScrollTrigger";
import {gsap} from "gsap";
import useScreenWidth from "../helpers/useScreenWidth.js";

gsap.registerPlugin(ScrollTrigger);

gsap.to(".js--delivery-img-first", {
  translateX: -70,
  scrollTrigger: {
    trigger: ".js--animation-delivery",
    start: "top center",
    end: "bottom top",
    scrub: 1
  }
})

const translateX = useScreenWidth ? 800 : 70;

gsap.to(".js--delivery-img-second", {
  translateX: translateX,
  scrollTrigger: {
    trigger: ".js--animation-delivery",
    start: "top center",
    end: "bottom top",
    scrub: 1
  }
})