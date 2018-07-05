<?php

namespace App\Repositories;

use App\Models\energies;
use InfyOm\Generator\Common\BaseRepository;

class energiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'energie_solaire',
        'energie_senelec',
        'date_envoie',
        'heure',
        'tension_min_senelec',
        'tension_max_senelec',
        'tension_max_solaire',
        'courant_min_senelec',
        'courant_min_solaire',
        'courant_max_senelec',
        'courant_max_solaire',
        'puissance_min_senelec',
        'puissance_min_solaire',
        'puissqnce_max_senelec',
        'puissance_max_solaire',
        'tension_inst_senelec',
        'tension_inst_solaire',
        'courant_inst_senelec',
        'courant_inst_solaire',
        'puissance_inst_senelec',
        'puissance_inst_solaire',
        'compteur_idCompteur'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return energies::class;
    }
}
