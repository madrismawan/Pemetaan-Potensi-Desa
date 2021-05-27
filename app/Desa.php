<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use Notifiable;

    protected $table = 'tb_desa';

    protected $fillable = [
        'namadesa',
        'batasdesa',
    ];

    public function potensidesa(){
        return $this->hasOne('App\PotensiDesa','desa_id','id');
    }


}
