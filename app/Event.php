<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'desc',
        'reward',
        'img',
        'created_by',
    ];
}
