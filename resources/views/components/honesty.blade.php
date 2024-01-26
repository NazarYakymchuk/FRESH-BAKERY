@props(['data', 'anchor'])

<section {{ $attributes->class(['honesty', 'js--animation-'.$anchor]) }}>
  <div class="honesty__container container">
    <div class="honesty__title title">
      <span class="title__basic">{{ $data['title'] }}</span>
      <span class="title__subtitle">{{ $data['subtitle'] }}</span>
    </div>
    <div class="honesty__wrapper">
      @foreach($data['data'] as $item)
        <div @class([
            'honesty__box',
            '_reverse' => $loop->index % 2 != 0
        ])>
          <div class="honesty__inner">
            <p class="honesty__text">{{ $item['text'] }}</p>
            @if($item['button'])
              <x-ui.btn class="honesty__btn" hover>замовити</x-ui.btn>
            @endif
          </div>
          <div class="honesty__img-wrapper">
            <img
              src="{{ Vite::asset('resources/assets/images/product/'.$item["img"]) }}"
              alt="child"
              @class(['honesty__img', 'js--img-'.$anchor])
            >
            @isset($item['small-img'])
              <img
                src="{{ Vite::asset('resources/assets/images/product/'.$item["small-img"]) }}"
                alt="child"
                @class(['honesty__img _short', 'js--img-'.$anchor])
              >
            @endisset
            <div
              style="background-image: url('{{ Vite::asset('resources/assets/images/product/'.$item["bg"]) }}')"
              class="honesty__bg"
            ></div>
            @isset($item['video'])
              <button type="button" class="honesty__play-btn">
                <x-ui.svg name="play" class="honesty__play-icon" />
              </button>
            @endisset
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>