<?php

namespace App\Livewire;

use App\Models\Solution;
use Livewire\Component;

class NavigationApp extends Component
{

    public $solutions;

    public function mount()
    {
        $this->solutions = Solution::with('services')->get();
    }

    public function render()
    {
        return view('livewire.navigation-app');
    }
}
