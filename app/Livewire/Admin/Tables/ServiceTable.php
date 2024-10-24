<?php

namespace App\Livewire\Admin\Tables;

use App\Models\Service;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPageName('pagina');
        $this->setDefaultSort('id','asc');   
        $this->setPerPageAccepted([5,15,25,-1]);
        $this->setPerPage(5);
    }

    public function columns(): array
    {
        return [

            Column::make('Acciones', 'id')
                ->format(fn($value) => view('admin.services.tables.actions',[
                    'id' => $value
                ])),

            Column::make("Id", "id")
                ->searchable()
                ->sortable(),

            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),
            
            Column::make("Descripcion", "description")
                ->searchable()
                ->sortable(),

            Column::make("Solución", "solution.name")
                ->searchable()
                ->sortable(),
            
            Column::make("Icono", "icon")
                ->sortable()
                ->searchable()
                ->format(fn($value, $column, $row) => view('components.rich-text', ['content' => "<ion-icon name='$value' class='text-lg'></ion-icon>"])),

            Column::make("Fecha de Creación", "created_at")
                ->sortable()->searchable()->format(fn($value) => $value->format('d/m/Y h:m'))->collapseOnTablet(),
            
        ];
    }
}
