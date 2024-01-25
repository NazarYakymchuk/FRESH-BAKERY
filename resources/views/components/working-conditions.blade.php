@php
    $list = [
        [

           'name' => 'КАФЕ',
           'img' => 'cafe.png'
        ],
        [
           'name' => 'КАВЯРНІ',
           'img' => 'cafe-shops.png'
        ],
        [
           'name' => 'СТОЛОВІ',
           'img' => 'dining-room.png'
        ],
        [
           'name' => 'СУПЕРМАРКЕТИ',
           'img' => 'supermarket.png'
        ],
    ];
    $data = [
        'title' => 'як ми знаходим один одного',
        'subtitle' => 'співпарця та умови роботи з нами',
        'text' => 'ми співпрацюємо з багатьма закладами торгівлі в місті Луцьк, та з іншими містами завдяки нам, партери підняли середній чек та отримали ексклюзивні смаки продукції яку ми виготовляємо тільки для них',
        'img-bg' => 'title-bg.png'
    ];
@endphp
<div {{ $attributes->class(['working-conditions']) }}>
  <div class="working-conditions__wave-inner wave-inner _top">
    <x-ui.svg name="wave-second" class="wave-inner__icon" />
  </div>
  <div class="working-conditions__wrapper">
    <div class="working-conditions__container container">
      <div class="working-conditions__title title">
        <div
          class="title__basic _background"
          style="background-image: url('{{ Vite::asset('resources/assets/images/'.$data['img-bg']) }}')"
        >{{ $data['title'] }}</div>
        <span class="title__subtitle">{{ $data['subtitle'] }}</span>
      </div>
      <p class="working-conditions__text">
        {{ $data['text'] }}
      </p>
      <ul class="working-conditions__list">
        @foreach($list as $item)
          <li class="working-conditions__item">
            <img src="{{ Vite::asset('resources/assets/images/'.$item['img']) }}" class="working-conditions__img" />
            <span class="working-conditions__name">{{ $item['name'] }}</span>
          </li>
        @endforeach
      </ul>
      <x-ui.btn class="working-conditions__btn">ПОЧАТИ СПІВПРАЦЮ</x-ui.btn>
    </div>
  </div>
  <div class="working-conditions__wave-inner wave-inner _reverse">
    <x-ui.svg name="wave-second" class="wave-inner__icon" />
  </div>
</div>