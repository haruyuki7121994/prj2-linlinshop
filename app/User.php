<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, ActiveTrait;

    const IS_ADMIN = 1;
    const ACTIVE = 1;
    const INACTIVE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'address', 'province_id', 'is_admin', 'is_active', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeIsAdmin($query)
    {
        return $query->whereIsAdmin(self::IS_ADMIN);
    }

    public function isAdmin()
    {
        return $this->is_admin === self::IS_ADMIN;
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
