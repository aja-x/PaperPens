<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DosenModel extends Authenticatable
{
    use Notifiable;
    protected $guard = 'dosen';
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $guarded = [
        'id_user'
    ];
    protected $hidden = [
        'password_user'
    ];
}
