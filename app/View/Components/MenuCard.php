<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuCard extends Component
{
    public $menus;
    /**
     * Create a new component instance.
     */
    public function __construct($menus)
    {
        $this->menus = $menus;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-card');
    }
}
