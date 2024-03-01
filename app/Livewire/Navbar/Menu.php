<?php

namespace App\Livewire\Navbar;

use Livewire\Component;

class Menu extends Component
{
    public $menuData;

    public function render()
    {
        return view('livewire.navbar.menu');
    }
}
