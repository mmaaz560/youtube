<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class Videocontroller extends Controller
{
    public function uploadvideo(request $req){
        $formfields =[
        'video'=>$req->input('video'),
        'title'=>$req->input('title'),
        'description'=>$req->input('description'),
        'thumbnail'=>$req->input('input-image'),
        'playlist'=>$req->input('playlist'),
        'kids'=>$req->boolean('kids'),
        'visibility'=>$req->input('visibility')
        ];


        $formfields['video']=$req->file('video')->store('videos','public');
        $formfields['thumbnail']=$req->file('input-image')->store('thumbnails','public');


        Videos::create($formfields);

        return redirect('/studio');

    }
}
