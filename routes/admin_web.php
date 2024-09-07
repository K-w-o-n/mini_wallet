<?php

use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\AdminUserController;
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





Route::prefix('admin')->name('admin')->middleware('auth:admin_users')->group(function() {
    Route::get('/',[PageController::class,'home'])->name('admin.home');
    
    Route::resource('admin-user', AdminUserController::class);
    Route::get('admin_user/datatable/ssd',[AdminUserController::class,'ssd']);
});

