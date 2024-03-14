<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function (){
    Route::get('/login',[AdminController::class,'loginAdmin'])->name('auth.login');
    Route::post('/login',[AdminController::class,'postLoginAdmin'])->name('auth.post');
    Route::get('/logout',[AdminController::class,'logoutAdmin'])->name('auth.logout');
});
Route::prefix('admin')->middleware('admin')->group(function(){

});

