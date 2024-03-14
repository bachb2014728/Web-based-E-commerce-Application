<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function (){
    Route::get('/login',[AdminController::class,'loginAdmin'])->name('auth.login');
    Route::post('/login',[AdminController::class,'postLoginAdmin'])->name('auth.post');
    Route::get('/logout',[AdminController::class,'logoutAdmin'])->name('auth.logout');
});
Route::prefix('admin')->middleware('admin')->group(function(){
    Route::group(['prefix'=> 'category'], function(){
        Route::get('/', [CategoryController::class,'getListCategory'])->name('category.index');
        Route::get('/create', [CategoryController::class,'createNewCategory'])->name('category.create');
        Route::post('/',[CategoryController::class,'saveNewCategory'])->name('category.save');
        Route::get('/{category}',[CategoryController::class, 'getOneCategoryById'])->name('category.getOne');
        Route::get('/{category}/edit',[CategoryController::class,'editOneCategory'])->name('category.edit');
        Route::put('/{category}/update',[CategoryController::class,'updateOneCategory'])->name('category.update');
        Route::delete('/{category}/delete',[CategoryController::class,'deleteOneCategory'])->name('category.delete');
    });
});

