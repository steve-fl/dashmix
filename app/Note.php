<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    protected $fillable = [

        'description',
        'created_by'
    ];

}
