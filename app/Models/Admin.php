<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable{

    //use RbacCheck;

    protected $fillable = ['username', 'password', 'avatrs', 'login_count', 'create_ip', 'last_login_ip', 'status'];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

}