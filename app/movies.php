<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;


class movies extends Model
{
    //
   
    public function genres(){
        return $this->belongsTo(genres::class);
    }
    public function episodes(){
        return $this->hasMany(episodes::class);
    }
}


