import MicromodalEs from "micromodal";
import {blockScroll, unBlockScroll} from "../helpers/scroll.js";
import useScreenWidth from "../helpers/useScreenWidth.js";

(function() {
  const buttonsModal = [...document.querySelectorAll('[data-modal-trigger]')];
  const buttonsModalClose = [...document.querySelectorAll('[data-modal-close]')];
  const buttonsLogOut = [...document.getElementsByClassName('js--logout')];
  const burgers = [...document.getElementsByClassName('js--burger')];

  if(!buttonsModal.length) return;

  buttonsModal.forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      MicromodalEs.show(btn.dataset.modalTrigger, {
        awaitOpenAnimation: true,
        awaitCloseAnimation: true,
        onShow: (modal) => {
          hideScroll(modal);

          if(modal.getElementsByClassName('modal__container')[0]) {
            modal.getElementsByClassName('modal__container')[0].scrollTop = 0;
          }

          if(modal.id === 'request-call') {
            burgers.forEach(el => el.classList.add('_active'));
          }
        },
        onClose: (modal) => {
          showScroll(modal);
          videoBlock();
          burgerBlock(modal);
        }
      })
    })
  });
  /**
   * Get count modals, active modal on background
   * @returns {number}
   */
  function hasActiveModal() {
    return [...document.querySelectorAll('.micromodal-slide[aria-hidden="false"]')].length;
  }

  function videoBlock() {
    const modalBlock = document.getElementsByClassName('js--modal-video')[0];

    if(!modalBlock) return;

    modalBlock.classList.remove('_play-video')
    modalBlock.getElementsByClassName('js--video')[0].pause();
  }

  function burgerBlock(modal) {
    const btn = modal.getElementsByClassName('js--show-languages')[0];

    if(!btn) return;

    modal.getElementsByClassName('js--step-first')[0].classList.remove('_hide');
    modal.getElementsByClassName('js--step-second')[0].classList.add('_hide');
  }

  /**
   * Get largest z-index style
   * @returns {number}
   */
  function highestZIndex() {
    return Math.max(...[...document.querySelectorAll('.micromodal-slide.is-open')].map(el => +window.getComputedStyle(el).zIndex))
  }

  /**
   * Custom event close all modals
   */
  MicromodalEs.closeAll = function() {
    const allModal = [...document.getElementsByClassName('micromodal-slide')];
    if(allModal.length) {
      buttonsLogOut.forEach(el => el.classList.remove('_active'));
      allModal.forEach(el => {
        if(el.classList.contains('is-open')) {
          MicromodalEs.close(el.id);
        }
      });
    }
  }

  /**
   * Close button event
   */
  buttonsModalClose.forEach(el => {
    el.addEventListener('click', e => {
      MicromodalEs.close(e.currentTarget.dataset.modalClose);
      showScroll(document.getElementById(el.dataset.modalClose));
    })
  });

  /**
   * Remove class of active buttons
   * @param name
   */
  function closeButton(name) {
    [...document.querySelectorAll(`[data-modal-trigger="${name}"]`)]
      .forEach(el => el.classList.remove('_active'));
  }

  /**
   * Event when hash exist when load page
   */
  showHash();

  function showHash(){
    if(window.location.hash) {
      const name = window.location.hash.slice(1);
      const el = document.getElementsByClassName(`${name}`)[0];

      if(!el) return;

      MicromodalEs.show(name, {
        awaitCloseAnimation: true,
        onShow: (modal) => {
          hideScroll(modal);
        },
        onClose: (modal) => {
          showScroll(modal);
        }
      });
    }
  }

  /**
   * Events document click on block with class "js--content-modal"
   * @param modal
   */
  function initEventBackgroundClick(modal, removeEvent) {
    if(removeEvent) {
      modal.removeEventListener('click', hideBlock);
    } else {
      modal.addEventListener('click', hideBlock);
    }
    function hideBlock() {
      modal.removeEventListener('click', hideBlock);
      MicromodalEs.close(modal.id)
    }
  }

  /**
   * Set event stopPropagation for all modals content
   */
  [...document.getElementsByClassName('js--content-modal')].forEach(el => el.addEventListener('click', e => e.stopPropagation()));

  /**
   * Hide scrollbar, init event document click and z-index for modal
   * @param modal
   */
  function hideScroll(modal) {
    blockScroll();
    initEventBackgroundClick(modal);

    if(hasActiveModal() === 0) window.history.replaceState(null, null, `#${modal.id}`);

    modal.style.zIndex = highestZIndex() + 1;

    document.querySelectorAll(`[data-modal-trigger="${modal.id}"], [data-modal="${modal.id}"]`).forEach(el => el.classList.add('_active'));
  }

  /**
   * Show scrollbar when modals is closed
   * @param modal
   */
  function showScroll(modal, isClosed = false) {

    if(modal) modal.style.zIndex = null;

    document.querySelectorAll(`[data-modal-trigger="${modal.id}"], [data-modal="${modal.id}"]`).forEach(el => el.classList.remove('_active'));

    initEventBackgroundClick(modal, true);

    if(!hasActiveModal() || isClosed) {
      history.replaceState(null, null, window.location.href.split('#')[0]);
      setTimeout(() => {
        unBlockScroll();
      }, 200)
    }
  }

  requestCall();
  function requestCall() {
    const modal = document.getElementById('request-call');

    if(!modal || useScreenWidth) return;

    modal.classList.remove('micromodal-right')
    modal.classList.add('micromodal-slide')
  }


  if(burgers.length) {
    burgers.forEach(btn => {
      btn.addEventListener('click', e => {
        if(btn.classList.contains('_active')) {
          burgers.forEach(el => el.classList.remove('_active'));
          MicromodalEs.closeAll();
        } else {
          burgers.forEach(el => el.classList.add('_active'));

          document.querySelector('[data-modal-trigger="burger"]').click();
        }
      })
    })
  }
})();