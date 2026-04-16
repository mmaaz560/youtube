<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function View(){
       return $this->hasMany(View::class ,'video_id'); 
    }
}
