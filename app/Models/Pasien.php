<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pasien
 * @package App\Models
 * @version April 20, 2018, 2:32 am UTC
 */
class Pasien extends Model
{
    use SoftDeletes;

    public $table = 'pasiens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_pasien',
        'No_handphone',
        'Keluhan',
        'Obat',
        'tanggal_masuk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_pasien' => 'string',
        'No_handphone' => 'string',
        'Keluhan' => 'string',
        'Obat' => 'string',
        'tanggal_masuk' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_pasien' => 'required',
        'No_handphone' => 'required',
        'Keluhan' => 'required',
        'tanggal_masuk' => 'required'
    ];

    
}
