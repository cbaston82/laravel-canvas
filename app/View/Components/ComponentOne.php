<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentOne extends Component
{
    public string $buttonText = 'Child Component One';

    public function testChildComponentOne()
    {
        $this->buttonText = 'Pressed';
    }

    public function render(): View
    {
        return view('components.component-one');
    }
}
