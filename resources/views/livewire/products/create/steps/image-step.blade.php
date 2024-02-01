<div>
    <x-livewire::products.create.navigation :steps="$steps" />

    <div class="rounded-sm mx-auto border max-w-3xl border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <form wire:submit="submit">

            <div class="mb-5 flex gap-4">
                <div class="flex items-center space-x-3">
                    <label for="image" class="h-44 w-44 bg-gray-100 border-2 border-dashed flex items-center justify-center">
                        Choose an image
                    </label>

                    <input type="file" id="image" class="sr-only" wire:model="image">

{{--                    <x-input-error :messages="$errors->get('image')" class="mt-2" />--}}
                </div>

                @if($this->imagePreview())
                    <img src="{{ $this->imagePreview() }}" alt="" class="h-44 w-44">
                @endif
            </div>

            <x-livewire::products.create.buttons>
                <x-slot:back>
                    <x-secondary-button type="button" wire:click="previousStep">
                        {{ __('Back') }}
                    </x-secondary-button>
                </x-slot:back>

                <x-primary-button>
                    {{ __('Next Step') }}
                </x-primary-button>
            </x-livewire::products.create.buttons>
        </form>
    </div>
</div>
