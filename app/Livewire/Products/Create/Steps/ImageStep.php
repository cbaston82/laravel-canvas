<?php

namespace App\Livewire\Products\Create\Steps;

use Illuminate\Support\Arr;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Spatie\LivewireWizard\Components\StepComponent;

class ImageStep extends StepComponent
{
    use WithFileUploads;

    #[Validate('required|image|max:1024', message: 'A product must have an image.')]
    public $image;

    public function stepInfo(): array
    {
        return [
            'label' => 'Product Image.'
        ];
    }

    public function updatedImage()
    {
        if (is_array($this->image)) {
            $this->image = head(Arr::flatten($this->image));
        }
    }

    #[Computed()]
    public function product(){
       return $this->state()->product();
    }

    #[Computed()]
    public function imagePreview()
    {
        if ($this->image) {
            return $this->image?->temporaryUrl();
        }

        if ($this->product->image_path) {
            return 'storage/' . explode('/', $this->product->image_path)[1];
        }

        return null;

    }

    #[NoReturn]
    public function submit(): void
    {
        if ($this->product->image_path && !$this->image) {
            $this->nextStep();
        }

        $this->validate();

        $this->product()->update([
            'image_path' => $this->image->store(path: 'public')
        ]);

        $this->nextStep();
    }


    public function render()
    {
        return view('livewire.products.create.steps.image-step');
    }
}
