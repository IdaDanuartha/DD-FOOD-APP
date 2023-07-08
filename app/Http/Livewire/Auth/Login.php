<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public $remember = 1;
    
    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function mount()
    {
        if(Cookie::has('username')) {
            $this->username = Cookie::get('username');
        }

        if(Cookie::has('userpass')) {
            $this->password = Cookie::get('userpass');
        }
    }

    public function login()
    {
        $this->validate();

        try {
            if(Auth::attempt(['username' => $this->username, 'password'=> $this->password])) {

                if($this->remember) { 
                    Cookie::queue('username', $this->username, 1440);
                    Cookie::queue('userpass', $this->password, 1440);
                }
                session()->flash('success', 'Welcome back, ' . Auth::user()->username);
                return redirect()->route('admin.dashboard');
                
            } else {
                session()->flash('error', 'Username atau password anda salah!');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
