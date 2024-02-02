<x-layouts.guest-layout>
    <div class="flex items-center h-screen justify-center">
        <div class="rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">
            <h2 class="mb-9 text-2xl font-bold text-black text-center dark:text-white sm:text-title-xl2">
                {{ __(config('app.name')) }}
            </h2>

            <x-auth-session-status class="mb-4" :status="session('message')" />

            <div class="flex flex-col gap-2">
                <a href="{{ route('auth.redirect', 'twitter') }}" class="border border-gray-200 bg-gray-800 text-white flex items-center justify-center h-12 font-semibold rounded-lg" href="">Sin in with X</a>
                <a href="{{ route('auth.redirect', 'github') }}" class="border border-gray-200 bg-gray-800 text-white flex items-center justify-center h-12 font-semibold rounded-lg" href="">Sin in with Github</a>
                <div>
                    <a href="{{ route('login') }}" class="text-primary">login</a>
                    or
                    <a class="text-primary" href="{{ route('register') }}">register</a> with email
                </div>
            </div>

        </div>
    </div>
</x-layouts.guest-layout>
