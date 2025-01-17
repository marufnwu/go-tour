<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenericButton extends Component
{
    public $type;
    public $class;
    public $id;
    public $icon;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'submit', $class = 'btn btn-primary btn-lg btn-block', $id = null, $icon = null, $text = 'Save')
    {
        $this->type = $type;
        $this->class = $class;
        $this->id = $id;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.generic-button');
    }
}
