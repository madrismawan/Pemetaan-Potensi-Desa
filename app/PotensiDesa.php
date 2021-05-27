<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiDesa extends Model
{
    protected $table = 'tb_potensidesa';

    protected $fillable = [
        'desa_id',
        'potensijenis_id',
        'potensi_id',
    ];


    public function jenispotensi(){
        return $this->belongsTo('App\JenisPotensi','potensijenis_id');
    }

    public function desa(){
        return $this->belongsTo('App\Desa','desa_id');
    }

}
