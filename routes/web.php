<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

Route::get("/",[FirstController::class,"index"]);
Route::get("/about", [FirstController::class,"about"]);
Route::get("/article/{id}", [FirstController::class,"article"])->where("id", "[0-9]+");

Route::get("/nouvelle/chanson",[FirstController::class,"nouvellechanson"])->middleware('auth');

Route::post("/chanson/store",[FirstController::class, "storechanson"])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{id}', [FirstController::class, "users"])->where("id", "[0-9]+");

Route::get('/suivre/{id}', [FirstController::class, "suivre"]);
