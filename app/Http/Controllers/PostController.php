<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = DB::table('posts')->paginate(20);
        return view('posts',['posts'=>$posts,'title'=>'posts']);
    }
    public function show($id){
        $post=Post::findorfail($id);
        return view('show',['post'=>$post,'title'=>$post->title]);
    }
    public function search(Request $request){ 
        $searchTerm = '%'.$request->search.'%';
        $posts = DB::table('posts')->where('title','like',$searchTerm)->orWhere('content','like', $searchTerm)->orWhereDate('created_at','like',$searchTerm)->paginate(20);
        return view('post.create',['posts'=>$posts,'title'=>'posts']);
    }
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        Post::create($request->all());
        return redirect('/post');
    }
    public function edit(Request $request,$id){
        $post=Post::findorfail($id);
        return view('post.edit',['post'=>$post]);
    }

    public function update(Request $request, $id){
        $post=Post::findorfail($id);
        $post->update($request->all());
        return redirect('/post');
    }

    public function delete($id){
        $post=Post::findorfail($id);
        $post->delete();
        return redirect('/post');
    }
}
