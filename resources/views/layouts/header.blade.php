<header {{ $attributes->class(['header']) }} >
    <div class="header__container container">
        <div class="header__logo">
            <img src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt="logo" class="header__icon">
        </div>
        <button type="button" class="header__call-request">
            ЗВ'ЯЖІТЬСЯ З НАМИ
        </button>
        <button type="button" class="header__btn burger js--burger">
            <div class="burger__wrapper">
                <span></span>
            </div>
        </button>
    </div>
</header>