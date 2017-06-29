<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function profile()
    {
       return $this->hasOne(Profile::class);
    }
    public function getHasworkAttribute($value)
    {
        return count($this->profile);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
