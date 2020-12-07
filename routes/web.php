<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Bài tập về nhà buổi 3, 4

Route::get('/',[HomeController::class,'index']);
Route::get('/post', [PostController::class,'index'])->middleware('check_login');
Route::post('/post',[PostController::class,'search']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/create',[PostController::class,'create'])->middleware('check_role');

//bài tập về nhà buổi 2
Route::get('/home',[HomeController::class, 'home']);
