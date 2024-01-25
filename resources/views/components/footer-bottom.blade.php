@php
    $data = [
        [
            'title' => 'як нас знайти:',
            'info' => [
                [
                    'name' => 'BREADSTUDIA&LU',
                    'link' => ''
                ],
                [
                    'name' => '+ 38 (095) 644 54 87',
                    'link' => ''
                ],
                [
                    'name' => 'м.луцьк, Киiвський майдан 9',
                    'link' => ''
                ]
            ]
        ],
        [
            'title' => 'ПРО НАС',
            'info' => [
                [
                    'name' => 'про ЛЮБОВ ДО ВИПІЧКИ',
                    'link' => ''
                ],
                [
                    'name' => 'ФОТОГАЛЕРЕЯ',
                    'link' => ''
                ],
                [
                    'name' => 'ВІДГУКИ',
                    'link' => ''
                ]
            ]
        ],
        [
            'title' => 'співпраця:',
            'info' => [
                [
                    'name' => 'Умови співраці',
                    'link' => ''
                ],
                [
                    'name' => 'Умови доставки',
                    'link' => ''
                ]
            ]
        ],
        [
            'title' => 'наша продукція:',
            'info' => [
                [
                    'name' => 'ПРО ВИРОБНИЦТВО',
                    'link' => ''
                ],
                [
                    'name' => 'АСОРТИМЕНТ ПРОДУКЦІЇЇ',
                    'link' => ''
                ]
            ]
        ]
    ];
@endphp
<div {{ $attributes->class(['footer-bottom']) }}>
  <div class="footer-bottom__inner _form">
    <span class="footer-bottom__title title">
      <span class="title__basic">НЕ ПРОПУСТІТЬ</span>
      <span class="title__basic _second">НОВИНИ ПРО нас</span>
    </span>
    <form action="" class="footer-bottom__form">
      <x-ui.input
        name="email"
        class="footer-bottom__input"
        placeholder="Введіть ваш EMAIL"
        no-label
      />
      <x-ui.btn class="footer-bottom__btn">ПІДПИСАТИСЬ </x-ui.btn>
    </form>
  </div>
  <div class="footer-bottom__inner-box">
    @foreach($data as $item)
      <div class="footer-bottom__inner">
        <span class="footer-bottom__subtitle">{{ $item['title'] }}</span>
        <ul class="footer-bottom__list">
          @foreach($item['info'] as $link)
            <li class="footer-bottom__item">
              <a href="{{ $link['link'] }}" class="footer-bottom__link">
                {{ $link['name'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
</div>