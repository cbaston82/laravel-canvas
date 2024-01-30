<?php

namespace App\Livewire\Pages\Last;

use Illuminate\Contracts\View\View as IView;
use Livewire\Attributes\Title;
use Livewire\Component;

#[TItle('Last EPG | RCN Scheduler')]
class Index extends Component
{
    public function render(): IView
    {
        return view('livewire.pages.last.index');
    }
}
