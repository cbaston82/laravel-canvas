<x-layouts.guest-layout>
    <div class="flex flex-wrap items-center">

        <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
            <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
                {{ __(config('app.name')) }}
            </h2>

            <x-auth-session-status class="mb-4" :status="session('message')" />

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="flex mt-2 mb-4 italic justify-center">
                    @foreach (collect($errors->all())->take(1) as $error)
                        <x-form.input-error class="" :messages="$error" />
                    @endforeach
                </div>

                <div class="mb-4">
                    <x-form.input-label value="email" text="email" />
                    <div class="relative">
                        <x-form.text-input id="email" type="text" name="email" :value="old('email')" autofocus
                                           autocomplete="email" />

                        <span class="absolute right-4 top-4">
                            <x-mdi-email-outline class="fill-current" width="22" height="22" fill="none"
                                                 viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <x-form.input-label value="password" text="Password" />
                    <div class="relative">
                        <x-form.text-input id="password" type="password" name="password"
                                           autocomplete="current-password" />
                        <span class="absolute right-4 top-4">
                            <x-mdi-lock-outline class="fill-current" width="22" height="22" fill="none"
                                                viewBox="0 0 22 22" opacity="0.5" />
                        </span>
                    </div>
                </div>

                <div class="mb-5">
                    <x-primary-button type="submit">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest-layout>