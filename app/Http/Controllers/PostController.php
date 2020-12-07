<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = DB::table('posts')->paginate(20);
        return view('post_layout',['posts'=>$posts]);
    }
    public function search(Request $request){ 
        $searchTerm = '%'.$request->search.'%';
        $posts = DB::table('posts')->where('title','like',$searchTerm)->orWhere('content','like', $searchTerm)->orWhereDate('created_at','like',$searchTerm)->paginate(20);
        return view('post_layout',['posts'=>$posts]);
    }
    public function create(){
        return view('post_create_page');
    }
}
