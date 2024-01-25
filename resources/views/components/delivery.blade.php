@php
    $data = [
        'title' => 'дбайлива доставка',
        'subtitle' => 'як доставляється смак',
        'text' => 'Ми розуміємо, наскільки важливо, щоб кожен круасан дістався до вас у найкращому стані, незалежно від того, в якому місті ви знаходитесь. Саме тому ми використовуємо сучасні технології доставки та дотримуємось високих температурних стандартів.',
        'img-bg' => 'title-bg-2.png'
    ];
    $products = [
        'img-1.png',
        'img-2.png',
        'img-3.png',
        'img-4.png',
        'img-5.png',
        'img-6.png'
    ];
@endphp
<div {{ $attributes->class(['delivery']) }}>
  <div class="delivery__wave-inner wave-inner _top">
    <x-ui.svg name="wave-second" class="wave-inner__icon" />
  </div>
  <div class="delivery__wrapper">
    <div class="delivery__container container">
      <div class="delivery__title title">
        <div
          class="title__basic _background"
          style="background-image: url('{{ Vite::asset('resources/assets/images/'.$data['img-bg']) }}')"
        >{{ $data['title'] }}</div>
        <span class="title__subtitle">{{ $data['subtitle'] }}</span>
      </div>
      <p class="delivery__text">
        {{ $data['text'] }}
      </p>
      <x-ui.btn class="delivery__btn">замовити </x-ui.btn>
    </div>
  </div>
  <div class="delivery__box-animation box-animation">
    <div class="box-animation__inner">
      @foreach($products as $img)
        <img src="{{ Vite::asset('resources/assets/images/delivery/'.$img) }}" />
      @endforeach
    </div>
  </div>
  <div class="delivery__wave-inner wave-inner _reverse">
    <x-ui.svg name="wave-second" class="wave-inner__icon" />
  </div>
</div>