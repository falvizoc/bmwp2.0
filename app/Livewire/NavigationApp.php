<?php

namespace App\Livewire;

use App\Models\Solution;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;

class NavigationApp extends Component
{

    public $solutions;

    public function mount()
    {
        if (Schema::hasTable('solutions')) {
            $this->solutions = Solution::withCount('services as total_services')
                ->with(['services' => fn($q) => $q->where('show_in_nav', true)])
                ->get()
                ->filter(fn($s) => $s->services->isNotEmpty() || $s->total_services === 0)
                ->values();
        } else {
            $this->solutions = collect(); // Retorna una colección vacía si no existe la tabla
        }
    }

    public function render()
    {
        return view('livewire.navigation-app');
    }
}
