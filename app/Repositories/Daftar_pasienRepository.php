<?php

namespace App\Repositories;

use App\Models\Daftar_pasien;
use InfyOm\Generator\Common\BaseRepository;

class Daftar_pasienRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_pasien',
        'Golongan_darah',
        'tanggal_masuk',
        'No_Handphone',
        'Keluhan_pasien',
        'Keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Daftar_pasien::class;
    }
}
