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

//Bài tập về nhà buổi 2,3,4,5

Route::get('/',[HomeController::class,'index']);

Route::get('/post', [PostController::class,'index'])->middleware('check_login');
Route::post('/post',[PostController::class,'search']);

Route::get('/post/{id}',[PostController::class,'show']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/create',[PostController::class,'create'])->middleware('check_role');
Route::post('/create',[PostController::class,'store']);



Route::get('/edit/{id}',[PostController::class,'edit'])->middleware('check_role');
Route::post('/edit/{id}',[PostController::class,'update']);

Route::get('/delete/{id}',[PostController::class, 'delete']);



