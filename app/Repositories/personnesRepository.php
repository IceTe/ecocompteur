<?php

namespace App\Repositories;

use App\Models\personnes;
use InfyOm\Generator\Common\BaseRepository;

class personnesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'prenom',
        'date_naissance',
        'age',
        'numero_telephone',
        'date_enregistrement'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return personnes::class;
    }
}
