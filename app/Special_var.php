<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_var extends Model
{
    protected $table = 'special_var';
    protected $fillable = [
        'name', 'value',
    ];
}
