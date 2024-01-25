@props([
  "placeholder" => '',
  "label" => "",
  'noLabel' => false,
  'maska' => ''
])

<label
  {{
    $attributes->class([
      'input-inner',
      'js--input-mask' => $maska,
    ])
  }}
>
  @if(!$noLabel)
    <span class="input-inner__label">
      @if(!empty($label)) {{ $label }} @else {{ $placeholder }} @endif
    </span>
  @endif
  <input
    {{ $attributes->except('class') }}
    autocomplete="none"
    class="input-inner__input"
    placeholder="{{ $placeholder }}"
    @if($maska) data-maska="{{ $maska }}" @endif
  >
</label>