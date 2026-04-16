<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Views;
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
     
  public function getsinglevideo($id){
    $video = Videos::findOrFail($id);

    $videoviews = Views::where('video_id', $id)->first();
    if (!$videoviews){
      Views::create([
        'views' => 1,
        'video_id' => $id
      ]);
    }else{
      $videoviews->increment('views');
    }


    return view('single-video', compact(['video','videoviews']));
  }
    
  
  public function searchitem(Request $req){
    $search = $req->input('searchtrem');
    $videos=Videos::select('title')
    ->where('title', 'like', "%" . $search . "%")
    ->distinct()->limit(10)
    ->get();
    return response()->json($videos);
  }

  public function searchvideos(Request $req){
    $videos=Videos::where('title', $req->input('title'))->with('user')->get();
    return response()->json($videos);
  }
}
