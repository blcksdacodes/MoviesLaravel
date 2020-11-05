<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;

class episodes extends Model
{
  
    public function movies(){
        return $this->belongsTo(movies::class);
    }
    
}
