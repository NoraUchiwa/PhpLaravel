<?php
/**
 * Created by PhpStorm.
 * User: wamobi16
 * Date: 08/01/18
 * Time: 12:09
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }
}