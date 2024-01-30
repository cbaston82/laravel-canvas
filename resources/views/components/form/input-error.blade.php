@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm space-y-1']) }}>
        <li class="text-sm text-red">{{ $messages }}</li>
    </ul>
@endif
