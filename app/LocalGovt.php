<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalGovt extends Model
{
    protected $table = 'local_government';


    protected $fillable = [
        "Name","district_id"
    ];
}
