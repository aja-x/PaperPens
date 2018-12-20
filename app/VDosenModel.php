<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VDosenModel extends Model
{
    protected $guarded = [
        'id_dosen'
    ];

    protected $table = 'v_dosen';
    protected $primaryKey = 'id_dosen';
    public $timestamps = false;
}
