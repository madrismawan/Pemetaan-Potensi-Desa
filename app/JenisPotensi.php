<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPotensi extends Model
{
    protected $table = 'tb_jenispotensi';

    protected $fillable = [
        'namapotensi',
        'tablelink',
        'icon',
    ];


    public function ibadah(){
        return $this->hasOne('App\PotensiIbadah','potensi_id','id');
    }

    public function umkm(){
        return $this->hasOne('App\PotensiUmkm','potensi_id','id');
    }

    public function sekolah(){
        return $this->hasOne('App\PotensiSekolah','potensi_id','id');
    }


}
