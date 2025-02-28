<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/', function () {
//     return view('welcome');
// });

// Route::get('/index',[UserController::class,'index']);
// Route::get('/register',[AuthController::class,'register']);
// Route::post('/register',[AuthController::class,'registerPost']);
Route::get('/',[AnnounceController::class,'index']);
Route::get('/login',[userController::class,'loginForm']);
Route::post('/login',[userController::class,'login']);
Route::get('/register',[userController::class,'registerForm']);
Route::post('/register',[userController::class,'register']);
Route::get("/dashboard",[AnnounceController::class,"index"]);

