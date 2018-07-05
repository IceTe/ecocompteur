<?php

namespace App\Repositories;

use App\Models\transactions;
use InfyOm\Generator\Common\BaseRepository;

class transactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_service',
        'somme_payee',
        'date_transaction',
        'solde'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return transactions::class;
    }
}
