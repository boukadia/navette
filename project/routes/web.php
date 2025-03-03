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

//user
Route::get('/login',[userController::class,'loginForm']);
Route::post('/login',[userController::class,'login']);
Route::get('/register',[userController::class,'registerForm']);
Route::post('/register',[userController::class,'register']);
//announces
Route::get("/dashboard",[AnnounceController::class,"index"]);
Route::get('/',[AnnounceController::class,'index']);
Route::get("/create",[AnnounceController::class,"form"]);
Route::post("/create",[AnnounceController::class,"create"]);
Route::post("{id}/update",[AnnounceController::class,"update"])->name('update');
Route::get("{id}/edit",[AnnounceController::class,"edit"])->name('edit');
Route::get("{id}/delete",[AnnounceController::class,"delete"])->name('delete');

