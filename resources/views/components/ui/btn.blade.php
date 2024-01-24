@props([
    "type" => "button",
    "color" => "",
    "href" => ""
])

@if($href)
  <a
    href="{{ $href }}"
    {{
      $attributes->class([
        'btn',
        '_'.$color => $color
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
        '_'.$color => $color
      ])
    }}
  >
    <span class="btn__text">{{ $slot }}</span>
  </button>
@endif