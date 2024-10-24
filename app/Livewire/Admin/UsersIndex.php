<?php

namespace App\Livewire\Admin;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Excel;

class UsersIndex extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        $users = User::where(function($query) {
                            $query->where('name','LIKE','%' . $this->search .'%')
                            ->orWhere('email','LIKE','%' . $this->search .'%');
                        })
                      ->paginate(5);

        return view('livewire.admin.users-index', compact('users'));
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function exportExcel(){
        return (new UsersExport($this->search))->download('usuarios-de-la-plataforma.xls', Excel::XLS);
    }
}
