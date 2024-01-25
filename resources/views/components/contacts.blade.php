@php
    $contacts = [
        [
            'title' => 'адреса:',
            'value' => 'м.луцьк, Київський майдан 9'
        ],
        [
            'title' => 'Електронна пошта ',
            'value' => 'breadstudia&lu'
        ]
    ];
    $messengers = [
        [
            'icon' => 'telegram',
            'link' => ''
        ],
        [
            'icon' => 'viber',
            'link' => ''
        ],
        [
            'icon' => 'whatsapp',
            'link' => ''
        ],
        [
            'icon' => 'instagram',
            'link' => ''
        ],
    ]
@endphp
<div {{ $attributes->class(['contacts']) }}>
  @foreach($contacts as $item)
    <div class="contacts__item">
      <span class="contacts__title">{{ $item['title'] }}</span>
      <span class="contacts__value">{{ $item['value'] }}</span>
    </div>
  @endforeach
    <div class="contacts__item">
      <span class="contacts__title">месенджери</span>
      <ul class="contacts__list">
        @foreach($messengers as $messenger)
          <li class="contacts__inner">
            <a href="{{ $messenger['link'] }}" class="contacts__link">
              <x-ui.svg name="{{ $messenger['icon'] }}" class="contacts__icon" />
            </a>
          </li>
        @endforeach
      </ul>
    </div>
</div>