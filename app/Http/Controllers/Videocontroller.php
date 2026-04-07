<?php

namespace App\Http\Controllers;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $formfields['user_id'] =Auth::id();

        Videos::create($formfields);

      return redirect('/studio')->with('message','video uploaded successfully');

    }

    public function getvideos(){
      $allVideos = Videos::all();
      return view('welcome', compact('allVideos'));
    }
    
}
