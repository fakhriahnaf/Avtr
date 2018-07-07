<?php

namespace App\Repositories;

use App\Models\Pasien;
use InfyOm\Generator\Common\BaseRepository;

class PasienRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_pasien',
        'No_handphone',
        'Keluhan',
        'Obat',
        'tanggal_masuk'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pasien::class;
    }
}
