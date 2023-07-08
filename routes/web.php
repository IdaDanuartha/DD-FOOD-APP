<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Customer\Home;
use App\Http\Livewire\Customer\Orders;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/', '/home');

Route::get('/admin/login', Login::class);
Route::get('/home', Home::class);
Route::get('/orders', Orders::class);
