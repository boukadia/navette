<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\tagController;
use App\Http\Middleware\authe;
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
Route::get('/login', [userController::class, 'loginForm'])->name("loginForm");
Route::post('/login', [userController::class, 'login'])->name("login");
Route::get('/register', [userController::class, 'registerForm'])->name("registerForm");
Route::post('/register', [userController::class, 'register'])->name("register");
//announces
Route::get("/dashboard", [AnnounceController::class, "index"])->name("dashbord")->middleware(authe::class);
Route::get('/', [AnnounceController::class, 'index'])->name("index")->middleware(authe::class);
Route::get("/create", [AnnounceController::class, "form"])->name("form");
Route::post("/create", [AnnounceController::class, "create"])->name("create")->middleware("auth::class");
Route::post("{id}/update", [AnnounceController::class, "update"])->name('update');
Route::get("{id}/edit", [AnnounceController::class, "edit"])->name('edit')->middleware(authe::class);
Route::get("{id}/delete", [AnnounceController::class, "delete"])->name('delete')->middleware(authe::class);

Route::get("/logOut",[UserController::class,"logOut"])->name("logOut");

Route::get("/tag",[tagController::class,"store"])->name("store");
Route::get("/tag",[tagController::class,"show"])->name("show");
Route::post("/tag",[tagController::class,"create"])->name("createTag");


Route::post('/createRole', [roleController::class,"create"])->name("createRole");
Route::get("/role",[RoleController::class,"store"])->name("store");
Route::get("/roleAll",[RoleController::class,"index"])->name("roleAll");
Route::get("{role}/deleteRole",[RoleController::class,"destroy"])->name("deleteRole");
Route::get("{role}/editRole",[RoleController::class,"edit"])->name("editRole");
Route::post("{role}/updateRole",[RoleController::class,"update"])->name("updateRole");



// ==========================================
// Route::resource('tags', TagController::class);

