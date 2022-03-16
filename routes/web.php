<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\UserController;

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

Route::get('/' , [FrontendController::class , 'index'])->name('index');
Auth::routes();
Route::post('login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('sliders', SliderController::class);
Route::resource('users', UserController::class);
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth'], function(){
    Route::resource('sliders', SliderController::class);
    Route::resource('users', UserController::class);
});