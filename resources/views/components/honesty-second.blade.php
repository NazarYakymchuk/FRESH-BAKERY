@props(['data'])

<section {{ $attributes->class(['honesty']) }}>
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
          </div>
          <div class="honesty__img-wrapper">
            <img
              src="{{ Vite::asset('resources/assets/images/product/'.$item["img"]) }}"
              alt=""
              class="honesty__img"
            >
            <img
              src="{{ Vite::asset('resources/assets/images/product/'.$item["small-img"]) }}"
              alt=""
              class="honesty__img _short"
            >
            <div
              style="background-image: url('{{ Vite::asset('resources/assets/images/product/'.$item["bg"]) }}')"
              class="honesty__bg"
            ></div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>