@php
    $links =  [
        [
            'name' => 'Політика конфіденційності',
            'link' => ''
        ],
        [
            'name' => 'Договір оферти',
            'link' => ''
        ]
    ];
@endphp
<footer class="footer">
    <div class="footer__top">
        <div class="footer__wave-inner _top">
            <x-ui.svg name="wave-second" class="footer__wave-top" />
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
        <div class="footer__wave-inner _bottom">
            <x-ui.svg name="wave-second" class="footer__wave-top" />
        </div>
    </div>
    <div class="footer__bottom container">
        <x-footer-bottom class="footer__footer-bottom" />
        <div class="footer__box">
            <span class="footer__root">© 2023, BREADSTUDIA. All rights reserved.</span>
            <ul class="footer__list">
                @foreach($links as $item)
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