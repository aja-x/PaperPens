<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VPaperTopicModel extends Model
{
    protected $guarded = [
        'id_paper'
    ];

    protected $table = 'v_papertopic';
    protected $primaryKey = 'id_paper';
    public $timestamps = false;
}
