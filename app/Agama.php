<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = 'tb_agama';

    protected $fillable = [
        'agama',
    ];

    public function potensiibadah(){
        return $this->hasMany('App\PotensiIbadah','agama_id','id');
    }

}
