<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        $posts= DB::table('posts')->paginate(5);
        return view('home',['title'=>'BTVN Buoi2', 'posts'=>$posts]);
    }
}
