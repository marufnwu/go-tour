<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenericDropdown extends Component
{
    public $label;
    public $name;
    public $options;
    public $required;
    public $id;
    public $class;
    public $selected;
    public $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $label,
        $name,
        $options = [],
        $required = false,
        $id = null,
        $class = 'form-control form-margin-bottom',
        $selected = null,
        $placeholder = 'Select an option'
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->required = $required;
        $this->id = $id ?: $name;
        $this->class = $class;
        $this->selected = old($name, $selected);  // Default to old value or passed selected
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generic-dropdown');
    }
}
