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
@endphp
<x-app>
  <main class="home">
    <x-welcome class="home__welcome" />
    <x-honesty class="home__honesty _first" :data="$honestyFirst" />
  </main>
</x-app>