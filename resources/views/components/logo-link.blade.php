@props(['visibleOn'])

@php
    $isMobile = str_contains($visibleOn, 'mobile');
    $isDesktop = str_contains($visibleOn, 'desktop');

    $mobileClasses = $isMobile ? 'block flex-shrink-0 w-10 h-10 opacity-100 lg:opacity-0 lg:hidden' : 'hidden';
    $desktopClasses = $isDesktop ? 'opacity-0 lg:opacity-100 hidden lg:block' : 'hidden';
@endphp

<div {{ $attributes }} x-data="{ isMobile: window.innerWidth < 1024 }" x-on:resize.window="isMobile = window.innerWidth < 1024">
    <a href="{{ route('canvas') }}" wire:navigate.hover
       x-bind:class="isMobile ? '{{ $mobileClasses }} transition-all duration-200 ease-in-out' :
           '{{ $desktopClasses }} transition-all duration-200 ease-in-out'">
        <img alt="Logo"
             :src="isMobile ? '{{ asset('/images/logo/rcn-logo-mobile.png') }}' : '{{ asset('/images/logo/rcn-logo.png') }}'" />
    </a>
</div>
