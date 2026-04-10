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
            return response()->json([
                "message" => "Please login to add a comment"
            ], 401);
        }

        


        $formfeilds = [
            'comment' => $req->input('comment'),
            'user_id' => $req->input('user_id'),
            'video_id' => $req->input('video_id')
        ];

        Comments::create($formfeilds);
        return response()->json([
            "message" => "Comment added successfully"
        ]);

    }
}
