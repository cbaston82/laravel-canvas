@props(['route'])

<a href="{{ route($route) }}" wire:navigate.hover
   {{ $attributes->class([
       'group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium
                         text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4',
       'bg-graydark dark:bg-meta-4' => Route::is($route),
   ]) }}>

    {{ $slot }}

</a>
