<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    protected $fillable = [
        'P_Nickname',
        'P_ID',
        'rule',
        'BanTime',
        'BanType',
        'created_by',
    ];
}
