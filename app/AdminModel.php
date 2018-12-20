<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminModel extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $table = 'tb_admin';
    protected $primaryKey = 'id_admin';
    protected $guarded = [
        'id_admin'
    ];
    protected $hidden = [
        'password_admin'
    ];
}
