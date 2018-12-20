<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DosenModel extends Authenticatable
{
    use Notifiable;
    protected $guard = 'dosen';
    protected $table = 'tb_dosen';
    protected $primaryKey = 'id_dosen';
    protected $guarded = [
        'id_dosen'
    ];
    public $timestamps = false;

}
