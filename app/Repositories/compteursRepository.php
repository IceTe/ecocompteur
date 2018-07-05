<?php

namespace App\Repositories;

use App\Models\compteurs;
use InfyOm\Generator\Common\BaseRepository;

class compteursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero_compteur',
        'adresse',
        'alloue',
        'date_creation',
        'ip_adresse',
        'adresse_geolocalisation',
        'numero_telephone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return compteurs::class;
    }
}
