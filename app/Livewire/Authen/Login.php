<?php

namespace App\Livewire\Authen;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components.layouts.blank')]

    public $email;
    public $password;

   
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->to('/home');
        }

        // Authentication failed
        session()->flash('error', 'Invalid credentials');
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.authen.login');
    }

    public function register()
    {
        return redirect()->to('/register');
    }
}
