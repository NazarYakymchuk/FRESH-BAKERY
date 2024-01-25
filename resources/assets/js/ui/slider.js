import { Swiper } from "swiper";
import { Navigation, EffectFade } from "swiper/modules";

(function() {
  const taste = document.getElementsByClassName('js--taste-slider')[0];

  if(taste) {
    new Swiper('.js--taste-slider', {
      modules: [Navigation, EffectFade],
      loop: true,
      effect: 'fade',
      navigation: {
        nextEl: ".js--taste-button-next",
        prevEl: ".js--taste-button-prev",
      },
    })
  }
})()