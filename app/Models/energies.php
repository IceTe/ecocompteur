<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class energies
 * @package App\Models
 * @version July 5, 2018, 11:08 am UTC
 */
class energies extends Model
{
    use SoftDeletes;

    public $table = 'energies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'energie_solaire' => 'string',
        'energie_senelec' => 'string',
        'date_envoie' => 'date',
        'tension_min_senelec' => 'string',
        'tension_max_senelec' => 'string',
        'tension_max_solaire' => 'string',
        'courant_min_senelec' => 'string',
        'courant_min_solaire' => 'string',
        'courant_max_senelec' => 'string',
        'courant_max_solaire' => 'string',
        'puissance_min_senelec' => 'string',
        'puissance_min_solaire' => 'string',
        'puissqnce_max_senelec' => 'string',
        'puissance_max_solaire' => 'string',
        'tension_inst_senelec' => 'string',
        'tension_inst_solaire' => 'string',
        'courant_inst_senelec' => 'string',
        'courant_inst_solaire' => 'string',
        'puissance_inst_senelec' => 'string',
        'puissance_inst_solaire' => 'string',
        'compteur_idCompteur' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'energie_solaire' => 'require',
        'energie_senelec' => 'require',
        'date_envoie' => 'require',
        'heure' => 'require',
        'tension_min_senelec' => 'tension_min_solaire string text',
        'tension_max_senelec' => 'require',
        'tension_max_solaire' => 'require',
        'courant_min_senelec' => 'require',
        'courant_min_solaire' => 'require',
        'courant_max_senelec' => 'require',
        'courant_max_solaire' => 'require',
        'puissance_min_senelec' => 'require',
        'puissance_min_solaire' => 'require',
        'puissqnce_max_senelec' => 'require',
        'puissance_max_solaire' => 'require',
        'compteur_idCompteur' => 'require'
    ];

    
}
