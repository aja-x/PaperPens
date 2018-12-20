<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EditorModel extends Authenticatable
{
    use Notifiable;
    protected $guard = 'editor';
    protected $table = 'tb_editor';
    protected $primaryKey = 'id_editor';
    protected $guarded = [
        'id_editor'
    ];
    protected $hidden = [
        'password_editor'
    ];
}
