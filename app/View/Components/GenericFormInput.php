<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenericFormInput extends Component
{
    public $label;
    public $name;
    public $type;
    public $value;
    public $placeholder;
    public $required;
    public $id;
    public $class;

    public function __construct(
        $label,
        $name,
        $type = 'text',
        $value = '',
        $placeholder = '',
        $required = false,
        $id = '',
        $class = 'form-control form-margin-bottom'
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->id = $id ?: $name; // Default ID to the name if not provided
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generic-form-input');
    }
}
