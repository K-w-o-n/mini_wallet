<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Auth\AdminLoginController;

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


//User Auth
Auth::routes();

//Home Page
Route::get('/',[PageController::class,'home']);

//Admin user Auth
Route::get('admin/login',[AdminLoginController::class,'showLoginForm']);
Route::post('admin/login',[AdminLoginController::class,'login'])->name('admin.login');

