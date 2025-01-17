<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlugFormInput extends Component
{
    public $label;
    public $name;
    public $placeholder;
    public $required;
    public $id;
    public $class;
    public $slugFrom;
    public $value;

    public function __construct(
        $label,
        $name,
        $value = "",
        $placeholder = '',
        $required = false,
        $id = '',
        $class = 'form-control',
        $slugFrom = 'name' // The input field to generate the slug from
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->id = $id ?: $name;
        $this->class = $class;
        $this->slugFrom = $slugFrom;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slug-form-input');
    }
}
