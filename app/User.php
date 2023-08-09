<?php

namespace App;

use App\Notifications\UserResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'document_id', 
        'birth', 
        'phone', 
        'password', 
        'teacher_api_id', 
        'student_api_id', 
        'employee_api_id', 
        'status_id',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function user_permissions(){
        return $this->hasMany(Users_Permissions::class, 'user_id');
    }
    
    public function user_permissions_id(){
        return $this->hasMany(Users_Permissions::class, 'user_id')->select('permission_id');
    }
    
    public function is_admin(){
        return $this->hasPermission([1]);
    }

    public function is_content(){
        return $this->hasPermission([1 , 2]);
    }

    public function is_teacher(){
        return $this->teacher_api_id;
    }

    public function is_student(){
        return $this->student_api_id;
    }

    public function is_employee(){
        return $this->employee_api_id;
    }

    public function hasPermission($permissionIds)
    {
        return $this->user_permissions()->whereIn('permission_id', $permissionIds)->exists();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPassword($token));
    }
}
