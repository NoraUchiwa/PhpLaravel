<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    function user(){
        //Connecte avec la Class User
        return $this->belongsTo(User::class);
    }
}
