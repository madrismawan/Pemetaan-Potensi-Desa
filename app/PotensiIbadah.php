<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiIbadah extends Model
{
    protected $table = 'tb_tempatibadah';

    protected $fillable = [
        'potensi_id',
        'agama_id',
        'nama_tempatibadah',
        'alamat',
        'image',
        'desc',
        'lat',
        'lng',
    ];

    public function jenispotensi(){
        return $this->belongsTo('App\JenisPotensi','potensi_id');
    }

}
