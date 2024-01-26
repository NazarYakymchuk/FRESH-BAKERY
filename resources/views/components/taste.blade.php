@php
    $data = [
        'title' => 'Як Народжуеться Смак',
        'subtitle' => 'склад, ТЕРМІН ПРИДАТНОСТІ, УМОВИ ЗБЕРІГАННЯ',
        'text' => 'Наша робота починається з вибору найкращих рецептів та перевірених технік випікання. Ми тестуємо різні комбінації та змішуємо інгредієнти з пильністю художника, який створює свій шедевр.'
    ];
    $product = [
        [
            'img' => 'bread.png',
            'name' => 'ХЛІБ БЕЗДРІЖОВИЙ',
            'animation-slug' => 'top',
            'storage' => [
                'B2',
                'борошно',
                'БЕЗ ГМО',
                'на маслі',
                'М’ЯКИЙ',
                'B2',
                'бездріжжовий'
            ],
            'storage-conditions' => [
                '30 діб',
                'ПРИ ТЕМПЕРАТУРІ',
                'B2',
                '20 ГРАДУСІВ',
                'БЕЗ ГМО',
                '3-4 ',
                '30 діб'
            ]
        ],
        [
            'img' => 'baguette.png',
            'name' => 'БАТОН ГРЕЧАНИЙ',
            'animation-slug' => 'right',
            'storage' => [
                'ГРЕЧАНЕ БОРОШНО',
                'ЗАКВАСКА',
                'на маслі',
                'М’ЯКИЙ',
                'B2',
                'бездріжжовий'
            ],
            'storage-conditions' => [
                '30 діб',
                'ПРИ ТЕМПЕРАТУРІ',
                'B2',
                '20 ГРАДУСІВ',
                'БЕЗ ГМО',
                '3-4 ',
                '30 діб'
            ]
        ],
        [
            'img' => 'croissant.png',
            'name' => 'круасан класичний',
            'animation-slug' => 'bottom',
            'storage' => [
                'НІЖНИЙ',
                'БЕЗ ГМО',
                'на маслі',
                'М’ЯКИЙ',
                'B2',
                'БОРОШНО',
                'бездріжжовий'
            ],
            'storage-conditions' => [
                '30 діб',
                'ПРИ ТЕМПЕРАТУРІ',
                'B2',
                '20 ГРАДУСІВ',
                'БЕЗ ГМО',
                '3-4 ',
                '30 діб'
            ]
        ]
    ];
@endphp
<section {{ $attributes->class(['taste']) }}>
  <div class="taste__container container">
    <div class="taste__title title">
      <span class="title__basic">{{ $data['title'] }}</span>
      <span class="title__subtitle">{{ $data['subtitle'] }}</span>
    </div>
    <div class="taste__box">
      <p class="taste__text">{{ $data['text'] }}</p>
      <x-ui.btn class="taste__btn" hover>замовити </x-ui.btn>
    </div>
    <div class="taste__slider swiper js--taste-slider">
      <div class="taste__wrapper swiper-wrapper">
        @foreach($product as $item)
          <div @class(['taste__slide swiper-slide', '_animation-'.$item['animation-slug']])>
            <div class="taste__tabs taste-tabs js--tabs d-md-none">
              <div class="taste-tabs__inner">
                <button type="button" class="taste-tabs__btn js--tab-btn _active" data-anchor="first">СКЛАД</button>
                <button type="button" class="taste-tabs__btn js--tab-btn" data-anchor="second">УМОВИ ЗБЕРІГАННЯ</button>
              </div>
              <div class="taste-tabs__content">
                <ul class="taste-tabs__list list-storage js--tab-content _active" data-anchor="first">
                  @foreach($item['storage'] as $text)
                    <li class="list-storage__item">{{ $text }}</li>
                  @endforeach
                </ul>
                <ul class="taste-tabs__list list-storage js--tab-content" data-anchor="second">
                  @foreach($item['storage-conditions'] as $text)
                    <li class="list-storage__item">{{ $text }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            <x-product-info class="taste__product-info" :data="$item" />
          </div>
        @endforeach
      </div>
      <div class="taste__tools">
        <button type="button" class="taste__btn-arrow _prev js--taste-button-prev">
          <x-ui.svg name="arrow" class="taste__arrow-icon" />
        </button>
        <button type="button" class="taste__btn-arrow _next js--taste-button-next">
          <x-ui.svg name="arrow" class="taste__arrow-icon" />
        </button>
      </div>
    </div>
  </div>
</section>