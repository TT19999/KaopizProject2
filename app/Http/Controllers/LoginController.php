<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        session(['token'=>'123']);
        session(['role'=> $request->name]);
        return redirect('/');
    }
    public function logout(){
        session(['token'=>null]);
        session(['role'=> null]);
        return redirect('/');
    }
}
