<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class ReseñasComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $reseñas = Review::take(5)->get();
        
        return view('livewire.reseñas-component', compact('reseñas'));
    }
}
