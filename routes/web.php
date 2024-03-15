<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    Route::group(['prefix'=> 'product'], function(){
        Route::get('/',[ProductController::class,'getListProduct'])->name('product.index');
        Route::get('/create', [ProductController::class,'createNewProduct'])->name('product.create');
        Route::post('/',[ProductController::class,'saveNewProduct'])->name('product.save');
        Route::get('/{product}',[ProductController::class,'getOneProduct'])->name('product.getOne');
        Route::get('/{product}/edit',[ProductController::class,'editOneProduct'])->name('product.edit');
        Route::put('/{product}/update',[ProductController::class,'updateOneProduct'])->name('product.update');
        Route::delete('/{product}/delete',[ProductController::class,'deleteOneProduct'])->name('product.delete');
        Route::delete('/delete-image/{product}', [ProductController::class, 'deleteImage'])->name('image.delete');

        Route::get('/{product}/detail',[ProductController::class,'createDetail'])->name('product.createDetail');
        Route::post('/{product}/detail',[ProductController::class,'saveNewDetail'])->name('product.addDetail');
        Route::delete('/{product}/detail',[ProductController::class,'deleteOneDetail'])->name('product.deleteDetail');
        Route::put('/detail/{id}',[ProductController::class,'saveUpdateDetail'])->name('product.updateDetail');
    });
});

