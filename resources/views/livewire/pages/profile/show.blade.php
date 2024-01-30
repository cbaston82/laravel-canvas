<div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
    <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
        <h3 class="font-semibold text-black dark:text-white">
            {{ __('Profile Information') }}
        </h3>
    </div>
    <form>
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
    </form>
</div>
