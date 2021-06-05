<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiUmkm extends Model
{
    protected $table = 'tb_umkm';

    protected $fillable = [
        'potensi_id',
        'nama',
        'jenis',
        'desc',
        'image',
        'alamat',
        'lat',
        'lng',
    ];

    public function jenispotensi(){
        return $this->belongsTo('App\JenisPotensi','potensi_id');
    }

}
