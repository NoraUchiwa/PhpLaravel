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

    function part(){
        //Fais la liaison avec la classe Part
        return $this->hasOne(Part::class);
    }

    function picture(){
        //Fais la liaison avec la classe Part
        return $this->hasOne(Picture::class);
    }

    function balance(){
        return $this->hasOne(Balance::class);
    }

    function trip (){
        return $this->hasOne(Trip::class);
    }

    function comments(){
        return $this->hasMany(Comment::class);
    }

    function spendings(){
        return $this->belongsToMany(Spending::class);
    }
}
