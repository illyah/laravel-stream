<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $dates = [
        'converted_at',
    ];

    protected $guarded = [];
}
