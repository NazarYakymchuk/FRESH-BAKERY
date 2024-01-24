@props([
  'name' => '',
])

<svg
  {{
    $attributes->class([
      'icon'
    ])
  }}
  aria-hidden="true"
>
  <use xlink:href="#{{ $name }}" />
</svg>