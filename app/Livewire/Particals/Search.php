<?php

namespace App\Livewire\Particals;

use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public $search = '';
    public $selectedProduct;
    
    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.particals.search',['products' => $products]);
    }

    public function selectProduct($productName)
    {
        $this->search = $productName;
        $this->selectedProduct = $productName;
    }
}
