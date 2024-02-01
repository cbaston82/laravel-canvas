<div>
    <x-livewire::products.create.navigation :steps="$steps" />

    <div class="rounded-sm mx-auto border max-w-3xl border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <form wire:submit="submit">
            <div class="mb-4">
                <x-form.input-label value="title" :value="__('Title')" />
                <div class="relative">
                    <x-form.text-input wire:model="title" id="title" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                    <span class="absolute right-4 top-4">
                <x-mdi-pencil class="fill-current" width="22" height="22" fill="none" viewBox="0 0 22 22" opacity="0.5" />
            </span>
                </div>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-form.input-label value="description" :value="__('Description')" />
                <div class="relative">
                    <x-form.text-area wire:model="description" id="description" type="text" name="description" :value="old('description')" autofocus autocomplete="description" />
                    <span class="absolute right-4 top-4">
                <x-mdi-pencil class="fill-current" width="22" height="22" fill="none" viewBox="0 0 22 22" opacity="0.5" />
            </span>
                </div>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-livewire::products.create.buttons>
                <x-primary-button>
                    {{ __('Next Step') }}
                </x-primary-button>
            </x-livewire::products.create.buttons>
        </form>
    </div>
</div>
