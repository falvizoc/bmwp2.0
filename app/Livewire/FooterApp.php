<?php

namespace App\Livewire;

use App\Models\Solution;
use Livewire\Component;

class FooterApp extends Component
{

    public $solutions;

    public function mount()
    {
        if (app()->runningInConsole()) {
            // No ejecutamos consultas si el comando se está ejecutando desde Artisan
            return;
        }
        
        $this->solutions = Solution::with('services')->get();
    }

    public function render()
    {
        return view('livewire.footer-app');
    }
}
