<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home",[HomeController::class,"home"]);
Route::get("/Register",[RegisterController::class,"register_form"])->middleware("guest");
Route::post("/Register",[RegisterController::class,"register"])->name("Register")->middleware("guest");
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware("auth");
Route::get('/login', [LoginController::class, 'login_view'])->name('login')->middleware("guest");
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware("guest");
