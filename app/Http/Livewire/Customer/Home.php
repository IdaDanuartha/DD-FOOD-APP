<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class Home extends Component
{    
    public function render()
    {
        // $menus = Menu

        return view('livewire.customer.home', compact('menus'));
    }
}
