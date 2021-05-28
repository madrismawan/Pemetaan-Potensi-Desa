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




}
