<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_old extends Model
{
    protected $table = 'users_old';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'document_id', 'birth', 'phone', 'password', 'role_id', 'status_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
