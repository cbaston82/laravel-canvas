@props(['value', 'text'])

<label {{ $attributes->merge(['class' => 'mb-2.5 block font-medium text-black dark:text-white', 'for' => $value]) }}>
    {{ $text ?? ($value ?? $slot) }}
</label>
