<x-layouts.app>
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-semibold text-black dark:text-white">
                {{ __('Profile Information') }}
            </h3>
        </div>
        <div class="p-6.5">
            <div class="mb-4.5">
                <x-form.input-label for="name" :value="__('Name')" />
                <x-form.text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name', auth()->user()->name)"
                                   readonly autofocus autocomplete="name" />
                <x-form.input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-4.5">
                <x-form.input-label for="email" :value="__('Email')" />
                <x-form.text-input class="mt-1 block w-full" id="email" name="email" type="email"
                                   :value="old('email', auth()->user()->email)" readonly autocomplete="username" />
                <x-form.input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="space-y-4">
                <h2 class="mb-2 text-lg font-semibold text-black dark:text-white">{{ __('Your Permissions:') }}</h2>

                <p class="text-gray-600 dark:text-gray-400 mt-2 text-sm">
                    {{ __('To request additional permissions please contact an administrator.') }}
                </p>
            </div>
        </div>
    </div>

    <div class="mt-4 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-semibold text-black dark:text-white">
                {{ __('Update Password') }}
            </h3>
        </div>

        <form class="mt-6 space-y-6" method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            @if ($errors->get('password'))
                {{ $errors->get('password') }}
            @endif

            <div class="p-6.5">
                <div class="mb-4.5">
                    <x-form.input-label for="update_password_current_password" :value="__('Current Password')" />
                    <x-form.text-input class="mt-1 block w-full" id="update_password_current_password"
                                       name="current_password" type="password" autocomplete="current-password" />
                    <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                </div>

                <div class="mb-4.5">
                    <x-form.input-label for="update_password_password" :value="__('New Password')" />
                    <x-form.text-input class="mt-1 block w-full" id="update_password_password" name="password"
                                       type="password" autocomplete="new-password" />
                    <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                </div>

                <div class="mb-4.5">
                    <x-form.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                    <x-form.text-input class="mt-1 block w-full" id="update_password_password_confirmation"
                                       name="password_confirmation" type="password" autocomplete="new-password" />
                    <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p class="text-gray-600 dark:text-gray-400 text-sm" x-data="{ show: true }" x-show="show"
                               x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}</p>
                        @else
                            {{ __('Save') }}
                        @endif
                    </x-primary-button>
                </div>
            </div>
        </form>

    </div>
</x-layouts.app>
