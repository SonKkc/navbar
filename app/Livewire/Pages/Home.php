<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.pages.home');
    }

}
