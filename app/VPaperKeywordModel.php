<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VPaperKeywordModel extends Model
{
    protected $guarded = [
        'id_paper'
    ];

    protected $table = 'v_paperkeyword';
    protected $primaryKey = 'id_paper';
    public $timestamps = false;
}
