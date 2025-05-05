<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Technician extends Component
{
    /**
     * Create a new component instance.
     */

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.technician');
    }
}
