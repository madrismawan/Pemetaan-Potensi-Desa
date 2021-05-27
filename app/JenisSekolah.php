<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSekolah extends Model
{
    protected $table = 'tb_jenissekolah';

    protected $fillable = [
        'jenissekolah',
    ];

    public function sekolah(){
        return $this->hasMany('App\PotensiSekolah','jenis_sekolah_id','id');
    }

}
