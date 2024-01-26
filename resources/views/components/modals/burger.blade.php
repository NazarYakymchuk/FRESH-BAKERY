@php
    $list = [
        [
            'name' => 'ПРО ЛЮБОВ',
            'anchor' => '',
            'img' => 'baguette-1.png'
        ],
        [
            'name' => 'ПРО Смак',
            'anchor' => '',
            'img' => 'bread-1.png'
        ],
        [
            'name' => 'СПІВПАРЦЯІ ТА УМОВИ РОБОТИ',
            'anchor' => '',
            'img' => 'croissant-1.png'
        ],
        [
            'name' => 'ПРОЦЕС ВИПІКАННЯ',
            'anchor' => '',
            'img' => 'baguette-2.png'
        ],
        [
            'name' => 'ПРО ДОСТАВКУ',
            'anchor' => '',
            'img' => 'croissant-2.png'
        ],
        [
            'name' => 'ФОТОГАЛЕРЕЯ',
            'anchor' => '',
            'img' => 'bread-2.png'
        ],
        [
            'name' => 'КОНТАКТИ',
            'anchor' => '',
            'img' => 'bread-3.png'
        ]
    ];
@endphp
<x-modals.modal header animation="micromodal-right">
  <x-slot name="anchor">burger</x-slot>
  <div class="burger__wrapper">
    <ul class="burger__list">
      @foreach($list as $item)
        <li class="burger__item">
          <button type="button" class="burger__btn">
            <span class="burger__name">{{ $item['name'] }}</span>
            <img
              src="{{ Vite::asset('resources/assets/images/burger/'.$item['img']) }}"
              class="burger__img"
            />
          </button>
        </li>
      @endforeach
    </ul>
    <x-contacts class="burger__contacts" />
  </div>
  <x-ui.btn class="d-none" data-modal-trigger="burger"></x-ui.btn>
</x-modals.modal>