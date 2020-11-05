<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;


class genres extends Model
{
    //
    
    public function movies(){
        return $this->hasMany(movies::class);
    }
}
