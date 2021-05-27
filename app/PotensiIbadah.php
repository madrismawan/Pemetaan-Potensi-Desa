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
        'lat',
        'lng',
    ];

    public function potensidesa(){
        return $this->belongsTo('App\PotensiDesa','potensi_id');
    }

}
