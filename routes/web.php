<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminControllers\IndexController;
use App\Http\Controllers\AdminControllers\ProductsController;
use App\Http\Controllers\AdminControllers\AdminUsersController;

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
Route::prefix("admin")->middleware(['auth','isAdmin'])->group( function(){
    Route::get('index' , [IndexController::class , 'show']);
    Route::get('ViewUser' , [AdminUsersController::class , 'ShowUsers']);
    Route::get('ViewProducts',[ProductsController::class , 'ShowProducts' ]);

});
Route::get("/",[HomeController::class,"home"]);
Route::get("/Register",[RegisterController::class,"register_form"])->middleware("guest");
Route::post("/Register",[RegisterController::class,"register"])->name("Register")->middleware("guest");
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware("auth");
Route::get('/login', [LoginController::class, 'login_view'])->name('login')->middleware("guest");
Route::post('/login', [LoginController::class, 'login'])->name('login1')->middleware("guest");
Route::get('/profile', [ProfileController::class , 'ShowProfile'])->name('profile')->middleware('auth');
Route::get('/update/{id}',[ProfileController::class , 'ProfileData'])->middleware('auth');
Route::put('/update/{id}',[ProfileController::class , 'UpdateProfile'])->name('update');
Route::get('/Products', function ()
{
    return view("Products");
});
