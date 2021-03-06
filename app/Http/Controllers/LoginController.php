<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login',['title'=>'login']);
    }
    public function login(Request $request){
       
        if(Auth::attempt($request->only('email','password'), true)){
            return redirect('/');
        }
        return back();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(Request $request){
        
    }
}
