<?php
/**
 * Created by PhpStorm.
 * User: wamobi16
 * Date: 08/01/18
 * Time: 12:09
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}