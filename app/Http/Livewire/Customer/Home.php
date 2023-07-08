<?php

namespace App\Http\Livewire\Customer;

use App\Models\Category;
use App\Models\Menu;
use Livewire\Component;

class Home extends Component
{    
    public function render()
    {
        $menus = Menu::latest()->with("category")->get();
        $categories = Category::latest()->get();

        return view('livewire.customer.home', compact('menus', 'categories'));
    }
}
