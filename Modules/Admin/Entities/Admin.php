<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use SoftDeletes,HasRoles;
    
    protected $fillable = [
        'email',
        'password',
        'name'
    ];

    protected $guard = 'admin';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value){

        $value ? $this->attributes['password'] = bcrypt($value) : NULL;
    }
}
