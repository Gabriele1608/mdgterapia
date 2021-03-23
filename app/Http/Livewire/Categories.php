<?php

namespace App\Http\Livewire; 

use Livewire\Component;
use App\Models\Category;


class Categories extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.categories', compact('categories'));
    }
}
