<?php

namespace App\DataTables;

use App\Models\personnes;
use Form;
use Yajra\Datatables\Services\DataTable;

class personnesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'personnes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $personnes = personnes::query();

        return $this->applyScopes($personnes);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'nom' => ['name' => 'nom', 'data' => 'nom'],
            'prenom' => ['name' => 'prenom', 'data' => 'prenom'],
            'date_naissance' => ['name' => 'date_naissance', 'data' => 'date_naissance'],
            'age' => ['name' => 'age', 'data' => 'age'],
            'numero_telephone' => ['name' => 'numero_telephone', 'data' => 'numero_telephone'],
            'date_enregistrement' => ['name' => 'date_enregistrement', 'data' => 'date_enregistrement']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'personnes';
    }
}
