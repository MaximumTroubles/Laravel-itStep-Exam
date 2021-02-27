<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MainContoller;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::any('/', [MainContoller::class, 'index']);

Route::group(['middleware' => 'auth'],function () {

    Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
        Route::get('/', [AdminController::class, 'index']);
        Route::resource('/users', UserController::class);

    });
    Route::middleware(['auth'])->prefix('profile')->group(function(){
        Route::resource('/user', ProfileController::class);

    });
});

