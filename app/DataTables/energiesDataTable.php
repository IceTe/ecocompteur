<?php

namespace App\DataTables;

use App\Models\energies;
use Form;
use Yajra\Datatables\Services\DataTable;

class energiesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'energies.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $energies = energies::query();

        return $this->applyScopes($energies);
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
            'energie_solaire' => ['name' => 'energie_solaire', 'data' => 'energie_solaire'],
            'energie_senelec' => ['name' => 'energie_senelec', 'data' => 'energie_senelec'],
            'date_envoie' => ['name' => 'date_envoie', 'data' => 'date_envoie'],
            'heure' => ['name' => 'heure', 'data' => 'heure'],
            'tension_min_senelec' => ['name' => 'tension_min_senelec', 'data' => 'tension_min_senelec'],
            'tension_max_senelec' => ['name' => 'tension_max_senelec', 'data' => 'tension_max_senelec'],
            'tension_max_solaire' => ['name' => 'tension_max_solaire', 'data' => 'tension_max_solaire'],
            'courant_min_senelec' => ['name' => 'courant_min_senelec', 'data' => 'courant_min_senelec'],
            'courant_min_solaire' => ['name' => 'courant_min_solaire', 'data' => 'courant_min_solaire'],
            'courant_max_senelec' => ['name' => 'courant_max_senelec', 'data' => 'courant_max_senelec'],
            'courant_max_solaire' => ['name' => 'courant_max_solaire', 'data' => 'courant_max_solaire'],
            'puissance_min_senelec' => ['name' => 'puissance_min_senelec', 'data' => 'puissance_min_senelec'],
            'puissance_min_solaire' => ['name' => 'puissance_min_solaire', 'data' => 'puissance_min_solaire'],
            'puissqnce_max_senelec' => ['name' => 'puissqnce_max_senelec', 'data' => 'puissqnce_max_senelec'],
            'puissance_max_solaire' => ['name' => 'puissance_max_solaire', 'data' => 'puissance_max_solaire'],
            'tension_inst_senelec' => ['name' => 'tension_inst_senelec', 'data' => 'tension_inst_senelec'],
            'tension_inst_solaire' => ['name' => 'tension_inst_solaire', 'data' => 'tension_inst_solaire'],
            'courant_inst_senelec' => ['name' => 'courant_inst_senelec', 'data' => 'courant_inst_senelec'],
            'courant_inst_solaire' => ['name' => 'courant_inst_solaire', 'data' => 'courant_inst_solaire'],
            'puissance_inst_senelec' => ['name' => 'puissance_inst_senelec', 'data' => 'puissance_inst_senelec'],
            'puissance_inst_solaire' => ['name' => 'puissance_inst_solaire', 'data' => 'puissance_inst_solaire'],
            'compteur_idCompteur' => ['name' => 'compteur_idCompteur', 'data' => 'compteur_idCompteur']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'energies';
    }
}
