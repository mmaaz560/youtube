<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerUser(Request $req){
       $formfeilds = [
        'name' => $req->input('name'),
        'email' => $req->input('email'),
        'password' => $req->input('password')
       ];


    //    hashing the password

    $formfeilds['password'] = bcrypt($formfeilds['password']);

     $user = User::create($formfeilds);
       
     Auth::login($user);
     return redirect('/');
    }
}
