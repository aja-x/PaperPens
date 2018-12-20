<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperModel extends Model
{
    protected $guarded = [
        'id_paper'
    ];

    protected $table = 'tb_paper';
    protected $primaryKey = 'id_paper';
    public $timestamps = false;
}
