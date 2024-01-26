@php
    $honestyFirst = [
      'title' => 'про любов',
      'subtitle' => 'до випічки',
      'data' => [
        [
          'text' => 'Кожен наш круасан - це маленький шедевр, який ми створюємо з великою старанністю. Ми обираємо тільки найкращі інгредієнти та вивчаємо кожну деталь виробництва.',
          'button' => true,
          'img' => 'img-1.png',
          'bg' => 'img-bg-1.svg'
        ],
        [
          'text' => 'Наші кулінари додають до кожного круасана краплину своєї душі, щоб подарувати вам найбільший смаковий задоволення.',
          'button' => true,
          'img' => 'img-1.png',
          'bg' => 'img-bg-2.svg'
        ],
      ]
    ];
    $honestySecond = [
      'title' => 'ЯК відбуваеться магія',
      'subtitle' => 'ПРОЦЕС ВИПІКАННЯ ПРОДУКЦІЇ',
      'data' => [
        [
          'text' => 'У "Студії Хліба" ми віримо у якість без компромісів. Наша команда майстрів випічки віддає перевагу натуральним інгредієнтам та найвищим стандартам, щоб забезпечити вам найкращі круасани.',
          'button' => false,
          'img' => 'img-2.png',
          'video' => '1.mp4',
          'bg' => 'img-bg-3.svg'
        ],
        [
          'text' => 'Ми віддаємо перевагу ручній роботі, а не масовому виробництву, оскільки віримо в унікальність кожного продукту.',
          'button' => false,
          'img' => 'img-3.png',
          'video' => '1.mp4',
          'bg' => 'img-bg-4.svg'
        ],
      ]
    ];
    $honestyThird = [
      'title' => 'ДОВІРА НА РОКИ',
      'subtitle' => 'ЯК НАС ПОЛЮБИЛИ нАЙМЕНШі',
      'data' => [
        [
          'text' => 'Ми віримо, що наші діти - це наші маленькі експерти у смаку та якості. Тому ми приділяємо особливу увагу тому, щоб вони відчували найвищий ступінь впевненості в наших круасанах. Кожен етап виробництва здійснюється з метою дарувати їм той найсмачніший досвід.',
          'button' => true,
          'img' => 'img-4.png',
          'small-img' => 'img-5.png',
          'bg' => 'img-bg-5-1.svg',
          'small-bg' => 'img-bg-6.svg'
        ],
        [
          'text' => 'Замовляйте круасани від “Студії Хліба” та переконайтеся в тому, як ми піклуємося про задоволення наших маленьких гурманів.',
          'button' => true,
          'img' => 'img-6.png',
          'small-img' => 'img-7.png',
          'bg' => 'img-bg-7-1.svg',
          'small-bg' => 'img-bg-8.svg'
        ],
      ]
    ];
@endphp
<x-app>
  <main class="home">
    <x-welcome class="home__welcome" />
    <x-honesty class="home__honesty _first" :data="$honestyFirst" />
    <x-taste class="home__taste" />
    <x-working-conditions class="home__working-conditions" />
    <x-honesty class="home__honesty _second" :data="$honestySecond" />
    <x-delivery class="home__delivery" />
    <x-honesty class="home__honesty _third" :data="$honestyThird" />
  </main>
</x-app>