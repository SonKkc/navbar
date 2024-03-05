<?php

namespace App\Livewire\Authen;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Register extends Component
{
    #[Layout('components.layouts.blank')]

    public $name;
    public $email;
    public $password;


    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Thực hiện xác nhận và lưu trữ người dùng mới
        $user = \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return redirect()->to('/login');
    }

    
    public function login()
    {
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.authen.register');
    }
}
