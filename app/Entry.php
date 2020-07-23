<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry-user relacion que existe entre amb0s
    // Entry n -1 USer
    //Eager loading
    public function user(){
        return $this->belongsTo(User::class);
    }
}
