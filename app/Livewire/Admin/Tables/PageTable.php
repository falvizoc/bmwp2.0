<?php

namespace App\Livewire\Admin\Tables;

use App\Models\Page;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PageTable extends DataTableComponent
{
    protected $model = Page::class;

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
                ->format(fn($value) => view('admin.pages.tables.actions',[
                    'id' => $value
                ])),

            Column::make("Id", "id")
                ->searchable()
                ->sortable(),

            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),

            Column::make("Fecha de Creación", "created_at")
                ->sortable()->searchable()->format(fn($value) => $value->format('d/m/Y h:m'))->collapseOnTablet(),
            
        ];
    }
}
