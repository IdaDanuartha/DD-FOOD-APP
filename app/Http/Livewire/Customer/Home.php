<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class Home extends Component
{    
    public function render()
    {
        $menus = [
            [
                'category' => 'junkfood',
                'name' => 'Burger',
                'price' => '35000',
            ],
            [
                'category' => 'junkfood',
                'name' => 'Ice Tea',
                'price' => '5000',
            ],
            [
                'category' => 'junkfood',
                'name' => 'Burger',
                'price' => '35000',
            ],
            [
                'category' => 'junkfood',
                'name' => 'Ice Tea',
                'price' => '5000',
            ],
            [
                'category' => 'junkfood',
                'name' => 'Burger',
                'price' => '35000',
            ],
            [
                'category' => 'junkfood',
                'name' => 'Ice Tea',
                'price' => '5000',
            ],
        ];

        return view('livewire.customer.home', compact('menus'));
    }
}
