<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
     public function Video(){
       return $this->hasMany(Video::class ,'video_id'); 
    }
}
