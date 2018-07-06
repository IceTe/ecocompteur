<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class personnes
 * @package App\Models
 * @version July 5, 2018, 10:41 am UTC
 */
class personnes extends Model
{
    use SoftDeletes;

    public $table = 'personnes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'age',
        'numero_telephone',
        'date_enregistrement'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'prenom' => 'string',
        'date_naissance' => 'date',
        'age' =>'string',
        'numero_telephone' => 'string',
        'date_enregistrement' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'age' => 'required',
        'numero_telephone' => 'required'
    ];

    
}
