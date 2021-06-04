<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Desa extends Model
{
    use Notifiable;

    protected $table = 'tb_desa';

    protected $fillable = [
        'namadesa',
        'batasdesa',
    ];

    public function potensidesa(){
        return $this->hasMany('App\PotensiDesa','desa_id','id');
    }


}
