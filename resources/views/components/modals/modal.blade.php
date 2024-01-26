@props(['header', 'animation' => 'micromodal-slide'])
<div
  id="{{ $anchor }}"
  @class(['modal', $anchor, $animation])
  aria-hidden="true"
>
  <div class="modal__overlay" tabindex="-1" data-micromodal-close="{{ $anchor }}">
    @isset($header)
      <x-header class="modal__header _modals" />
    @endisset
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="menu-title">
      {{ $slot }}
    </div>
  </div>
</div>