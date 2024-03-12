<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.app')] 

    public $products;

    public function mount()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.pages.home');
    }

}
