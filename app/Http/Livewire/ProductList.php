<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.product-list', [
            'products' => Product::latest()->with('user')->take(9)->get()
        ]);
    }
}
