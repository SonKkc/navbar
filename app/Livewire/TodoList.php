<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{

    public $todos = [];
 
    public $todo = '';
 
    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
