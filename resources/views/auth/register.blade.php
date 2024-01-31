<x-layouts.guest-layout>
    <div class="max-w-lg mx-auto rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">

        <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
            {{ __(config('app.name')) }}
        </h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-form.input-label value="email" text="name" />
                <div class="relative">
                    <x-form.text-input id="name" type="text" name="name" :value="old('name')" autofocus
                                       autocomplete="name" />
                    <span class="absolute right-4 top-4">
                            <x-mdi-account class="fill-current" width="22" height="22" fill="none"
                                           viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-form.input-label value="email" text="email" />
                <div class="relative">
                    <x-form.text-input id="email" type="text" name="email" :value="old('email')" autofocus
                                       autocomplete="email" />

                    <span class="absolute right-4 top-4">
                            <x-mdi-email-outline class="fill-current" width="22" height="22" fill="none"
                                                 viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.input-label value="password" text="password" />
                <div class="relative">
                    <x-form.text-input id="password" type="password" name="password" :value="old('password')" autofocus
                                       autocomplete="password" />

                    <span class="absolute right-4 top-4">
                            <x-mdi-key-variant class="fill-current" width="22" height="22" fill="none"
                                               viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-form.input-label value="password_confirmation" text="password" />
                <div class="relative">
                    <x-form.text-input id="password_confirmation" type="password" name="password_confirmation" :value="old('password_confirmation')" autofocus
                                       autocomplete="password_confirmation" />

                    <span class="absolute right-4 top-4">
                            <x-mdi-key-variant class="fill-current" width="22" height="22" fill="none"
                                               viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                </div>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex-col items-center justify-end mt-4">
                <x-primary-button class="mb-2">
                    {{ __('Register') }}
                </x-primary-button>

                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>
        </form>
    </div>
</x-layouts.guest-layout>
