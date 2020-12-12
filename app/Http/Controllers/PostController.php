<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Rules\OnlyOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = DB::table('posts')->paginate(20);
        return view('posts',['posts'=>$posts,'title'=>'posts']);
    }
    public function show($id){
        $post=Post::with('categories')->find($id);
        $categories=Category::get();
        return view('show',['post'=>$post,'title'=>$post->title,'categories'=>$categories]);
    }
    public function search(Request $request){ 
        $searchTerm = '%'.$request->search.'%';
        $posts = DB::table('posts')->where('title','like',$searchTerm)->orWhere('content','like', $searchTerm)->orWhereDate('created_at','like',$searchTerm)->paginate(20);
        return view('post.create',['posts'=>$posts,'title'=>'posts']);
    }
    public function create(){
        $categories=Category::get();
        return view('post.create',['categories'=>$categories]);
    }

    public function store(Request $request){

        $validator=Validator::make($request->all(),[
            'title' => [
                'required',
                'max:255',
                'foo',
                new OnlyOne(),
            ],
            'content' => 'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // if($request->hasFile('images')){
        //     $file= $request->file('images');
        //     $file->move(public_path('images', $file->getClientOriginalName()));
        //     $file_path = 'images/'.$file->getClientOriginalName(); 
        // }

        $post=Post::create($request->all());
        $post->categories()->attach($request->categories);
        return redirect('/post');
    }
    public function edit(Request $request,$id){
        $validator=Validator::make($request->all(),[
            'title' => [
                'required',
                'max:255',
            ],
            'content' => 'required',
        ]); 
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $post=Post::with('categories')->findorfail($id);        
        $categories=Category::get();
        return view('post.edit',['post'=>$post,'categories'=>$categories]);
    }

    public function update(Request $request, $id){
        $post=Post::findorfail($id);
        $post->update($request->all());
        $post->categories()->sync($request->categories);
        return redirect('/post');
    }

    public function delete($id){
        $post=Post::findorfail($id);
        $post->categories()->sync([]);
        $post->delete();
        return redirect('/post');
    }

    
}
