<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full cursor-pointer rounded-lg border border-secondary bg-secondary p-4 font-medium text-white transition hover:bg-opacity-90']) }}>
    {{ $slot }}
</button>
