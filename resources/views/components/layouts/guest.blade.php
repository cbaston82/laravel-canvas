<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <link type="image/x-icon" href="{{ asset('favicon.ico') }}" rel="icon">
    <link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link type="image/png" href="{{ asset('favicon-32x32.png') }}" rel="icon" sizes="32x32">
    <link type="image/png" href="{{ asset('favicon-32x32.png') }}" rel="icon" sizes="32x32">
    <link type="image/png" href="{{ asset('favicon-16x16.png') }}" rel="icon" sizes="16x16">
    <link href="{{ asset('site.webmanifest') }}" rel="manifest">
    <link href="{{ asset('safari-pinned-tab.svg') }}" rel="mask-icon" color="#031422">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/satoshi.css'])

    @stack('styles')
</head>

<body class="antialiased" x-cloak x-data="{ page: 'app', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
    <div class="overflow-hidde dark:bg-gray-900 flex h-screen min-h-screen">
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @livewireScriptConfig
    @stack('scripts')
</body>

</html>
