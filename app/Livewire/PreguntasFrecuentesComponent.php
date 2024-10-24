<?php

namespace App\Livewire;

use App\Models\FrecuentQuestion;
use Livewire\Component;
use Livewire\WithPagination;

class PreguntasFrecuentesComponent extends Component
{
    use WithPagination;
    
    public $page_id;
    public $search;

    public function render()
    {
        # Preguntas Frecuentes
        $preguntas_frecuentes = FrecuentQuestion::whereHas('pages', function($query) {
                                    $query->where('page_id', $this->page_id);
                                })
                                ->where(function($query) {
                                    $query->where('title', 'LIKE', '%' . $this->search . '%')
                                          ->orWhere('description', 'LIKE', '%' . $this->search . '%');
                                })
                                ->paginate(10);

        return view('livewire.preguntas-frecuentes-component', compact('preguntas_frecuentes'));
    }

    public function updated(){
        $this->resetPage();
    }
}
