<?php

namespace App\Livewire\Navbar;

use Livewire\Component;

class Submenu extends Component
{
    public $menuItem;

    public function render()
    {
        return view('livewire.navbar.submenu');
    }
}
