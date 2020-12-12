<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(User $user){
        $profile = $user->profile;
        
        return response()->json(compact('profile'));
    }

    public function posts(User $user){
        $posts=$user->posts;
        return view('posts',['posts'=>$posts,'title'=>'posts']);
    }
}
