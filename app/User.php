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

    // Get posts related to user
    public function posts() {
        return $this->hasMany('App\Post');
    }

    // Below is an accessor method example
    // Naming convention is "get" is a fix keyword, "name of attribute comes second" with first letter capital and "Attribute" is a fix keyword as well
    // Accessor manipulates data after it's retrieved from database and doesn't modifies the value retrieved from column.

    public function getNameAttribute($value) {
        return strtoupper($value);
    }
}
