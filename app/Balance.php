<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    function User(){
        return $this->belongsTo(User::class);
    }
}
