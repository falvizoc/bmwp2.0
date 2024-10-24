<?php

namespace App\Livewire\Admin\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class PermissionTable extends DataTableComponent
{
    protected $model = Permission::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPageName('pagina');
        $this->setDefaultSort('id','desc');   
        $this->setPerPageAccepted([5,15,25,-1]);
        $this->setPerPage(5);
    }

    public function columns(): array
    {
        return [

            Column::make('Acciones', 'id')
                ->format(fn($value) => view('admin.permisos.tables.actions',[
                    'id' => $value
                ])),

            Column::make("Id", "id")
                ->sortable()->searchable(),
            
            Column::make('Nombre', 'name')
                ->sortable()->searchable(),
            
            Column::make('Descripción', 'description')
                ->sortable()->searchable(),

        ];
    }
}
