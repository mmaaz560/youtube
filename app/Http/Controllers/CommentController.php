<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Dom\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createcomment(Request $req){

        $user = Auth::user();
        if(!$user){
            return false;
        }else{
            $formfeilds = [
            'comment' => $req->input('comment'),
            'user_id' => $req->input('user_id'),
            'video_id' => $req->input('video_id')
        ];

        }
        Comments::create($formfeilds);
        $allcomments = Comments::where('video_id',$formfeilds['video_id'])->with('user')->orderBy('id','desc')->get();
        return response()->json([
            "message" => "Comment added successfully",
            "comments" => $allcomments
        ]);
    }
         public function getcomment(Request $req){

        $user = Auth::user();
        if(!$user){
            return false;
        }else{
            $formfeilds = [
           
            'user_id' => $req->input('user_id'),
            'video_id' => $req->input('video_id')
        ];

        }
      
        $allcomments = Comments::where('video_id',$formfeilds['video_id'])->with('user')->orderBy('id','desc')->limit(8)->get();
        $commentcount = Comments::where('video_id',$formfeilds['video_id'])->count();
        return response()->json([
            "message" => "Comment added successfully",
            "comments" => $allcomments,
            "commentcount" => $commentcount
        ]);

    }
}
