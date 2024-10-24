<?php

namespace App\Livewire\Admin\Tables;

use App\Models\FrecuentQuestion;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FrecuentQuestionTable extends DataTableComponent
{
    protected $model = FrecuentQuestion::class;

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
                ->format(fn($value) => view('admin.frecuent-questions.tables.actions',[
                    'id' => $value
                ])),

            Column::make("Id", "id")
                ->searchable()
                ->sortable(),

            Column::make("Titulo", "title")
                ->searchable()
                ->sortable(),

            Column::make("Descripcion", "description")
                ->sortable()
                ->searchable()
                ->format(fn($value, $column, $row) => view('components.rich-text', ['content' => $value])),

            Column::make("Fecha de Creación", "created_at")
                ->sortable()->searchable()->format(fn($value) => $value->format('d/m/Y h:m'))->collapseOnTablet(),
            
        ];
    }
}
