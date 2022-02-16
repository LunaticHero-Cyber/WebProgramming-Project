<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    protected $fillable = ['username', 'email', 'password'];

    protected $table = 'users';

    public $timestamps = false;
}
