<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{

    protected $fillable = [
    'day', 'started', 'ended'
];
    function user(){
        //Connecte avec la Class User
        return $this->belongsTo(User::class);
    }
}
