<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'department_id' , 'subject' , 'content', 'users_email', 'status_id',
    ];
}
