<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class compteurs
 * @package App\Models
 * @version July 5, 2018, 11:24 am UTC
 */
class compteurs extends Model
{
    use SoftDeletes;

    public $table = 'compteurs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'numero_compteur',
        'adresse',
        'alloue',
        'date_creation',
        'ip_adresse',
        'adresse_geolocalisation',
        'numero_telephone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero_compteur' => 'string',
        'adresse' => 'string',
        'alloue' => 'integer',
        'date_creation' => 'date',
        'ip_adresse' => 'string',
        'adresse_geolocalisation' => 'string',
        'numero_telephone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_compteur' => 'required',
        'adresse' => 'required',
        'alloue' => 'require',
        'date_creation' => 'required',
        'numero_telephone' => 'require'
    ];

    
}
