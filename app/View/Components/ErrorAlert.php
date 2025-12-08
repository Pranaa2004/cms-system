<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorAlert extends Component
{
    public $err_field = '';
    /**
     * Create a new component instance.
     */
    public function __construct($err_field = null)
    {
        $this->err_field = $err_field;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.error-alert');
    }
}
