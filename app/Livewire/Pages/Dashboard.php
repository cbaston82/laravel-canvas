<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard | RCN Scheduler')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
