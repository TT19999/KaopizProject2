<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Infomation;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register(RegisterRequest $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/login');
    }
}
