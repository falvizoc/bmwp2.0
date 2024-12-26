<?php

namespace App\Livewire;

use App\Models\Solution;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;

class FooterApp extends Component
{

    public $solutions;

    public function mount()
    {
        if (Schema::hasTable('solutions')) {
            $this->solutions = Solution::with('services')->get();
        } else {
            $this->solutions = collect(); // Retorna una colección vacía si no existe la tabla
        }
    }

    public function render()
    {
        return view('livewire.footer-app');
    }
}
