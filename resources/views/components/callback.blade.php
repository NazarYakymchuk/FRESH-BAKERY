<form action {{ $attributes->class(['callback']) }}>
  <x-ui.input name="name" label="Введіть ваше імя" class="callback__input" />
  <x-ui.input name="phone" label="введіть ваш номер телефону" class="callback__input _last" />
  <x-ui.btn class="callback__btn">надіслати</x-ui.btn>
</form>