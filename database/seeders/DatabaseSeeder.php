<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "username" => "admin",
            "password" => bcrypt("admin")
        ]);

        Category::create([
            "name" => "Appetizer"
        ]);
        Category::create([
            "name" => "Main Course"
        ]);
        Category::create([
            "name" => "Dessert"
        ]);
        Category::create([
            "name" => "Beverages"
        ]);
        
        Menu::create([
            "name" => "Burger with cheese",
            "category_id" => 2,
            "price" => 25000
        ]);
        Menu::create([
            "name" => "Fried Rice",
            "category_id" => 2,
            "price" => 32000
        ]);
        Menu::create([
            "name" => "Lemon Tea",
            "category_id" => 4,
            "price" => 10000
        ]);
        Menu::create([
            "name" => "Jelly Pudding",
            "category_id" => 1,
            "price" => 15000
        ]);
        Menu::create([
            "name" => "Americano",
            "category_id" => 4,
            "price" => 18000
        ]);
        Menu::create([
            "name" => "Ice Tea",
            "category_id" => 4,
            "price" => 8000
        ]);
    }
}
