@props([
    "type" => "button",
    "color" => "",
    "href" => "",
    "hover" => false
])

@if($href)
  <a
    href="{{ $href }}"
    {{
      $attributes->class([
        'btn',
        '_'.$color => $color,
        'js--hover-btn' => $hover
      ])
    }}
  >
    <span class="btn__text">{{ $slot }}</span>
  </a>
@else
  <button
    type="{{ $type }}"
    {{
      $attributes->class([
        'btn',
        '_'.$color => $color,
        'js--hover-btn' => $hover
      ])
    }}
  >
    <span class="btn__text">{{ $slot }}</span>
  </button>
@endif