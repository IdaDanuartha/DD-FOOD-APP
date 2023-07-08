<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
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

Route::get('/auth/login', Login::class)->name('login')->middleware('guest');
Route::get('/home', Home::class)->name('home');
Route::get('/orders', Orders::class)->name('orders');

Route::middleware('auth')->group(function() {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

    Route::get('/auth/logout', Logout::class);
});
