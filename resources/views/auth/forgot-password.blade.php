<x-layouts.guest-layout>
    <div class="flex flex-wrap items-center">

        <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
            <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-form.input-label value="email" text="name" />
                    <div class="relative">
                        <x-form.text-input id="email" name="email" type="email" :value="old('email')" autofocus
                                           autocomplete="email" />

                        <span class="absolute right-4 top-4">
                            <x-mdi-account class="fill-current" width="22" height="22" fill="none"
                                           viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-layouts.guest-layout>
