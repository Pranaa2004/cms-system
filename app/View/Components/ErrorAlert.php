<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorAlert extends Component
{
    public $colum_attri ='';
    /**
     * Create a new component instance.
     */
    public function __construct($colum_attri)
    {
        $this->colum_attri = $colum_attri;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.error-alert');
    }
}
