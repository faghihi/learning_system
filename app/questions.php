<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    //
    protected $fillable=
        [
            'content','answers','answer','lesson','subject','tags','writer','level'
        ];
}