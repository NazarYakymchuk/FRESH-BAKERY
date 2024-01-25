@props(['data'])

<div {{ $attributes->class(['product-info']) }}>
  <div class="product-info__inner _storage d-none d-md-grid">
    <span class="product-info__title">СКЛАД:</span>
    <ul class="product-info__list-storage list-storage">
      @foreach($data['storage'] as $text)
        <li class="list-storage__item">
          {{ $text }}
        </li>
      @endforeach
    </ul>
  </div>
  <div class="product-info__wrapper">
    <div class="product-info__img-inner">
      <img src="{{ Vite::asset('resources/assets/images/storage/'.$data['img']) }}" alt="product" class="product-info__img">
      <x-ui.svg name="plate" class="product-info__icon" />
    </div>
    <span class="product-info__name">{{ $data['name'] }}</span>
  </div>
  <div class="product-info__inner _condition d-none d-md-grid">
    <span class="product-info__title">УМОВИ ЗБЕРІГАННЯ:</span>
    <ul class="product-info__list-storage list-storage">
      @foreach($data['storage-conditions'] as $text)
        <li class="list-storage__item">
          {{ $text }}
        </li>
      @endforeach
    </ul>
  </div>
</div>