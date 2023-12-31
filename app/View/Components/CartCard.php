<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CartCard extends Component
{
    public $carts;
    /**
     * Create a new component instance.
     */
    public function __construct($carts)
    {
        $this->carts = $carts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart-card');
    }
}
