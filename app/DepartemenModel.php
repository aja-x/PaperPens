<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartemenModel extends Model
{
    protected $fillable = [
        'nama_departemen'
    ];

    protected $table = 'm_departemen';
    protected $primaryKey = 'id_departemen';
    public $timestamps = false;
}
