<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Canvas | Laravel Canvas')]
class Canvas extends Component
{
    public function render()
    {
        return view('livewire.pages.canvas');
    }
}
