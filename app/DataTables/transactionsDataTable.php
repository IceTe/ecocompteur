<?php

namespace App\DataTables;

use App\Models\transactions;
use Form;
use Yajra\Datatables\Services\DataTable;

class transactionsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'transactions.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $transactions = transactions::query();

        return $this->applyScopes($transactions);
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
            'nom_service' => ['name' => 'nom_service', 'data' => 'nom_service'],
            'somme_payee' => ['name' => 'somme_payee', 'data' => 'somme_payee'],
            'date_transaction' => ['name' => 'date_transaction', 'data' => 'date_transaction'],
            'solde' => ['name' => 'solde', 'data' => 'solde'],
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
        return 'transactions';
    }
}
