<?php

namespace App\Http\Livewire\Customer;

use App\Models\Menu;
use Livewire\Component;

class Home extends Component
{    
    public function render()
    {
        $menus = Menu::all();

        return view('livewire.customer.home', compact('menus'));
    }
}
