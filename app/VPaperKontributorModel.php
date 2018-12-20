<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VPaperKontributorModel extends Model
{
    protected $guarded = [
        'id_paper'
    ];

    protected $table = 'v_paperkontributor';
    protected $primaryKey = 'id_paper';
    public $timestamps = false;
}
