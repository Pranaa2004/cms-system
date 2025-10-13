<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $type;
    public $input_class;
    public $addtional;
    public $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct($name = null, $label = null, $type = 'text', $input_class='form-control', $addtional = null,$placeholder=null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->input_class = $input_class;
        $this->addtional = $addtional;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
