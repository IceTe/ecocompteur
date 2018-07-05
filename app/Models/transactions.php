<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class transactions
 * @package App\Models
 * @version July 5, 2018, 11:35 am UTC
 */
class transactions extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom_service',
        'somme_payee',
        'date_transaction',
        'solde',
        'compteur_idCompteur'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom_service' => 'string',
        'somme_payee' => 'string',
        'date_transaction' => 'date',
        'solde' => 'string',
        'compteur_idCompteur' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_service' => 'require',
        'somme_payee' => 'require',
        'date_transaction' => 'require',
        'solde' => 'require',
        'compteur_idCompteur' => 'require'
    ];

    
}
