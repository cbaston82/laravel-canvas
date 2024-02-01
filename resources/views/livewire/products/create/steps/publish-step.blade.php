<div>
    <x-livewire::products.create.navigation :steps="$steps" />

    <div class="rounded-sm mx-auto border max-w-3xl border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <form wire:submit="submit">
            <div class="flex space-x-6">
                <div class="mb-4">
                    <div class="h-44 w-44">
                        <img src="{{ asset('storage/' . explode('/', $this->state()->product()->image_path)[1]) }}" class="h-44 w-44" />
                    </div>
                </div>
                <div class="space-y-2">
                    <h2 class="text-lg font-medium">{{ $product->title }}</h2>
                    <p>{{ $product->description }}</p>
                </div>
            </div>

            <x-livewire::products.create.buttons>
                <x-slot:back>
                    <x-secondary-button type="button" wire:click="previousStep">
                        {{ __('Back') }}
                    </x-secondary-button>
                </x-slot:back>

                <x-primary-button>
                    {{ __('Publish') }}
                </x-primary-button>
            </x-livewire::products.create.buttons>
        </form>
    </div>
</div>
