<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
     public function videos(){
       return $this->hasMany(Videos::class ,'video_id'); 
    }
}
