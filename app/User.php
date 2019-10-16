<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carton()
    {
        return $this->hasMany(Carton::class);
    }

    public function metal()
    {
        return $this->hasMany(Metal::class);
    }

    public function papel()
    {
        return $this->hasMany(Papel::class);
    }

    public function plastico()
    {
        return $this->hasMany(Plastico::class);
    }

    public function vidrio()
    {
        return $this->hasMany(Vidrio::class);
    }
}
