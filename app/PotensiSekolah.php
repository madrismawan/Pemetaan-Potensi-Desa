<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiSekolah extends Model
{
    protected $table = 'tb_sekolah';

    protected $fillable = [
        'potensi_id',
        'tingkat_id',
        'jenis_sekolah_id',
        'namasekolah',
        'alamat',
        'lat',
        'lng',
    ];

    public function potensidesa(){
        return $this->belongsTo('App\PotensiDesa','potensi_id');
    }

    public function tingkatsekolah(){
        return $this->belongsTo('App\TingkatSekolah','tingkat_id');
    }

    public function jenissekolah(){
        return $this->belongsTo('App\JenisSekolah','jenis_sekolah_id');
    }

}
