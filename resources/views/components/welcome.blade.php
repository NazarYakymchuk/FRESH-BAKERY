<section {{ $attributes->class(['welcome']) }}>
  <div class="welcome__container container">
    <div class="welcome__box">
      <span class="welcome__title">
        baked <span>fresh bakery</span>
      </span>
      <x-ui.svg name="welcome" class="welcome__icon" />
    </div>
    <img
      src="{{ Vite::asset('resources/assets/images/welcome-bg.png') }}"
      alt="bg"
      class="welcome__img"
    />
  </div>
  <div class="welcome__bg-wave">
    <x-ui.svg name="wave" class="welcome__icon-wave" />
  </div>
</section>