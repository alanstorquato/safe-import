<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'created_at ',
        'expires_at'
    ];
}
