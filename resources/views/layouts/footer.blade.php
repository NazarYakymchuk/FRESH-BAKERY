@php
    $root = [
        'text' => '© 2023, BREADSTUDIA. All rights reserved.',
        'links' =>  [
            [
                'name' => 'Політика конфіденційності',
                'link' => ''
            ],
            [
                'name' => 'Договір оферти',
                'link' => ''
            ]
        ]
    ];
@endphp
<footer class="footer">
    <div class="footer__top">
        <div class="footer__wave-inner wave-inner _top">
            <x-ui.svg name="wave-second" class="wave-inner__icon" />
        </div>
        <div class="footer__wrapper">
            <div class="footer__container container">
                <div class="footer__title title">
                    <span class="title__basic">звяжіться з нами</span>
                    <span class="title__subtitle">або залишайте заявку )</span>
                </div>
                <x-callback class="footer__callback" />
                <x-contacts class="footer__contacts" />
            </div>
            <img src="{{ Vite::asset('resources/assets/images/footer-img.png') }}" alt="footer" class="footer__img-bg" />
        </div>
        <div class="footer__wave-inner wave-inner _reverse">
            <x-ui.svg name="wave-second" class="wave-inner__icon" />
        </div>
    </div>
    <div class="footer__bottom container">
        <div class="footer__circle-inner circle-inner">
            <img src="{{ Vite::asset('resources/assets/images/circle-logo.png') }}" alt="circle-logo" class="circle-inner__circle-img">
        </div>
        <x-footer-bottom class="footer__footer-bottom" />
        <div class="footer__box">
            <span class="footer__root">{{ $root['text'] }}</span>
            <ul class="footer__list">
                @foreach($root['links'] as $item)
                    <li class="footer__item">
                        <a href="{{ $item['link'] }}" class="footer__link-root">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>