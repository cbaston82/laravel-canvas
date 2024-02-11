<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Livewire\Attributes\On;

class ComponentTwo extends Component
{
    #[On('post-to-table')]
    public function updatePostList(): void
    {
        dd('updating');
    }

    public function render(): View
    {
        return view('components.component-two');
    }
}
