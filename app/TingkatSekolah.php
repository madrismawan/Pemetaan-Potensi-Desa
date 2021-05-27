<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatSekolah extends Model
{
    protected $table = 'tb_tingkatsekolah ';

    protected $fillable = [
        'tingkatsekolah',
    ];

    public function sekolah(){
        return $this->hasMany('App\PotensiSekolah','tingkat_id','id');
    }

}
