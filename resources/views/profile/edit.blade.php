<x-layouts.app>
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
            <h3 class="font-semibold text-black dark:text-white">
                {{ __('Profile Information') }}
            </h3>
        </div>
        <div class="p-6.5">
            <div class="mb-4.5">
                <x-form.input-label for="name" :value="__('Name')" />
                <x-form.text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                   :value="old('name', auth()->user()->name)"
                                   readonly autofocus autocomplete="name" />
                <x-form.input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-4.5">
                <x-form.input-label for="email" :value="__('Email')" />
                <x-form.text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                   :value="old('email', auth()->user()->email)" readonly autocomplete="username" />
                <x-form.input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="space-y-4">
                <h2 class="mb-2 text-lg font-semibold text-black dark:text-white">{{  __('Your Permissions:')}}</h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('To request additional permissions please contact an administrator.') }}
                </p>
            </div>
        </div>
    </div>

    <div class="rounded-sm mt-4 border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
            <h3 class="font-semibold text-black dark:text-white">
                {{ __('Update Password') }}
            </h3>
        </div>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            @if($errors->get('password'))
                {{ $errors->get('password') }}
            @endif

            <div class="p-6.5">
                @if(auth()->user()->hasPassword())
                    <div class="mb-4.5">
                        <x-form.input-label for="update_password_current_password" :value="__('Current Password')" />
                        <x-form.text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                    </div>
                @endif
                <div class="mb-4.5">
                    <x-form.input-label for="update_password_password" :value="__('New Password')" />
                    <x-form.text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                </div>

                <div class="mb-4.5">
                    <x-form.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                    <x-form.text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-form.input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @else
                            {{ __('Save') }}
                        @endif
                    </x-primary-button>
                </div>
            </div>
        </form>

    </div>
</x-layouts.app>
