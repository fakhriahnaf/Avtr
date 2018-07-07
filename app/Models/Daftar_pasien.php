<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Daftar_pasien
 * @package App\Models
 * @version April 18, 2018, 9:20 am UTC
 */
class Daftar_pasien extends Model
{
    use SoftDeletes;

    public $table = 'daftar_pasiens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_pasien',
        'Golongan_darah',
        'tanggal_masuk',
        'No_Handphone',
        'Keluhan_pasien',
        'Keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_pasien' => 'string',
        'Golongan_darah' => 'string',
        'tanggal_masuk' => 'date',
        'Keluhan_pasien' => 'string',
        'Keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_pasien' => 'required',
        'Golongan_darah' => 'required',
        'tanggal_masuk' => 'required',
        'No_Handphone' => 'required',
        'Keluhan_pasien' => 'required'
    ];

    
}
