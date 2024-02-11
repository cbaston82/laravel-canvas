<x-layouts.guest-layout>
    <div
         class="mx-auto max-w-lg rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">

        <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
            {{ __(config('app.name')) }}
        </h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-form.input-label value="email" text="name" />
                <div class="relative">
                    <x-form.text-input id="name" name="name" type="text" :value="old('name')" autofocus
                                       autocomplete="name" />
                    <span class="absolute right-4 top-4">
                        <x-mdi-account class="fill-current" width="22" height="22" fill="none"
                                       viewBox="0 0 22 22" opacity="0.5" />
                    </span>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-form.input-label value="email" text="email" />
                <div class="relative">
                    <x-form.text-input id="email" name="email" type="text" :value="old('email')" autofocus
                                       autocomplete="email" />

                    <span class="absolute right-4 top-4">
                        <x-mdi-email-outline class="fill-current" width="22" height="22" fill="none"
                                             viewBox="0 0 22 22" opacity="0.5" />
                    </span>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.input-label value="password" text="password" />
                <div class="relative">
                    <x-form.text-input id="password" name="password" type="password" :value="old('password')" autofocus
                                       autocomplete="password" />

                    <span class="absolute right-4 top-4">
                        <x-mdi-key-variant class="fill-current" width="22" height="22" fill="none"
                                           viewBox="0 0 22 22" opacity="0.5" />
                    </span>
                </div>

                <x-input-error class="mt-2" :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-form.input-label value="password_confirmation" text="password" />
                <div class="relative">
                    <x-form.text-input id="password_confirmation" name="password_confirmation" type="password"
                                       :value="old('password_confirmation')" autofocus autocomplete="password_confirmation" />

                    <span class="absolute right-4 top-4">
                        <x-mdi-key-variant class="fill-current" width="22" height="22" fill="none"
                                           viewBox="0 0 22 22" opacity="0.5" />
                    </span>
                </div>

                <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
            </div>

            <div class="mt-4 flex-col items-center justify-end">
                <x-primary-button class="mb-2">
                    {{ __('Register') }}
                </x-primary-button>

                <a class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 rounded-md text-sm underline focus:outline-none focus:ring-2 focus:ring-offset-2"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>
        </form>
    </div>
</x-layouts.guest-layout>
