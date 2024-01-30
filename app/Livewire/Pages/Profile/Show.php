<?php

namespace App\Livewire\Pages\Profile;

use Illuminate\Contracts\View\View as IView;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Profile | RCN Scheduler')]
class Show extends Component
{
    public function render(): IView
    {
        return view('livewire.pages.profile.show');
    }
}
