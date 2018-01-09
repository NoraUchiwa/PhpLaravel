<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    function users(){
        return $this->belongsToMany(User::class);
    }
}
