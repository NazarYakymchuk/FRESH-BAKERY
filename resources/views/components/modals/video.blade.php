<x-modals.modal class="video-modal">
  <x-slot name="anchor">video-modal</x-slot>
  <div class="video-modal__wrapper">
    <video
      controls
      preload="true"
      class="video-box__video js--video"
    >
      <source
        src="img/2.mov"
        type="video/mp4"
      />
    </video>
  </div>
</x-modals.modal>