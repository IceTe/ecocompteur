<?php

namespace App\DataTables;

use App\Models\compteurs;
use Form;
use Yajra\Datatables\Services\DataTable;

class compteursDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'compteurs.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $compteurs = compteurs::query();

        return $this->applyScopes($compteurs);
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
            'numero_compteur' => ['name' => 'numero_compteur', 'data' => 'numero_compteur'],
            'adresse' => ['name' => 'adresse', 'data' => 'adresse'],
            'alloue' => ['name' => 'alloue', 'data' => 'alloue'],
            'date_creation' => ['name' => 'date_creation', 'data' => 'date_creation'],
            'ip_adresse' => ['name' => 'ip_adresse', 'data' => 'ip_adresse'],
            'adresse_geolocalisation' => ['name' => 'adresse_geolocalisation', 'data' => 'adresse_geolocalisation'],
            'numero_telephone' => ['name' => 'numero_telephone', 'data' => 'numero_telephone']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'compteurs';
    }
}
