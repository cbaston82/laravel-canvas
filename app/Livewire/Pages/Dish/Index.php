<?php

namespace App\Livewire\Pages\Dish;

use Illuminate\Contracts\View\View as IView;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dish EPG | RCN Scheduler')]
class Index extends Component
{
    public function render(): IView
    {
        return view('livewire.pages.dish.index');
    }
}
