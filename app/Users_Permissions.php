<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Permissions extends Model
{
    protected $table = 'users_permissions';
    protected $fillable = [
        'user_id' , 'permission_id'
    ];

    /*public function permission(){
        return $this->belongsTo(Permission::class);
    }*/
}
