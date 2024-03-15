<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\CartController;
use App\Http\Controllers\auth\CategoryAuthController;
use App\Http\Controllers\auth\HomeController;
use App\Http\Controllers\auth\OrderAuthController;
use App\Http\Controllers\auth\ProductAuthController;
use App\Http\Controllers\auth\ProfileUserController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::group(['prefix' => 'auth'], function (){
    Route::get('/login',[AdminController::class,'loginAdmin'])->name('auth.login');
    Route::post('/login',[AdminController::class,'postLoginAdmin'])->name('auth.post');
    Route::get('/logout',[AdminController::class,'logoutAdmin'])->name('auth.logout');
});
Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.index');

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
    Route::group(['prefix'=> 'member'], function (){
        Route::get('/',[MemberController::class , 'getListMember'])->name('member.index');
        Route::get('/{member}',[MemberController::class,'getOneMember'])->name('member.getOne');
        Route::delete('/{member}/delete',[MemberController::class,'deleteOneMember'])->name('member.delete');
        Route::get('/{member}/block',[MemberController::class,'blockOneMember'])->name('member.block');
    });
    Route::group(['prefix'=> 'order'], function (){
        Route::get('/',[OrderController::class,'getListOrder'])->name('order.index');
        Route::get('/{order}/accept',[OrderController::class,'acceptOneOrder'])->name('order.accept');
        Route::post('/{order}/cancel',[OrderController::class, 'cancelOneOrder'])->name('order.cancel');
        Route::delete('/{order}/delete',[OrderController::class,'deleteOneOrder'])->name('order.delete');
    });
    Route::group(['prefix'=>'profile'],function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.index');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::put('/', [ProfileController::class, 'updatePassword'])->name('password.update');
    });
});

// User
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'postLogin'])->name('user.postLogin');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'postRegister'])->name('user.postRegister');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[HomeController::class,'index'])->name('index');

Route::group(['prefix'=> 'product'], function () {
    Route::get('/',[ProductAuthController::class,'index'] )->name('sanpham.index');
    Route::get('/{product}',[ProductAuthController::class,'show'])->name('sanpham.show');
    Route::post('/rating/{product}',[ProductAuthController::class,'rateProduct'])->name('sanpham.rating');
    Route::post('/post-comment/{product}',[ProductAuthController::class,'postComment'])->name('sanpham.comment');
});
Route::group(['prefix'=> 'cart'], function () {
    Route::get('/',[CartController::class,'cart'])->name('cart.index');
    Route::get('/cart-add', [CartController::class, 'addToCart'])->name('cart.addto');
    Route::get('/cart-add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart-update-up/{id}', [CartController::class,'updateCartUp'])->name('cart.updateUp');
    Route::get('/cart-update-down/{id}', [CartController::class,'updateCartDown'])->name('cart.updateDown');
    Route::get('/cart-remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::get('/cart-clear', [CartController::class, 'clearCart'])->name('cart.clear');
});
Route::group(['prefix'=> 'order'], function () {
    Route::get('/',[OrderAuthController::class,'index'])->name('order.home');
    Route::get('/form', [OrderAuthController::class,'form'])->name('order.list');
    Route::post('/form', [OrderAuthController::class,'submit_form'])->name('order.complete');
    Route::get('/message-order/{id}', [OrderAuthController::class,'message_order'])->name('order.show');
    Route::get('/edit-order/{id}', [OrderAuthController::class,'edit_order'])->name('order.edit');
    Route::post('/update-order/{id}', [OrderAuthController::class,'update_order'])->name('order.update');
    Route::get('/buy-quick/{url}', [OrderAuthController::class,'buy_quick'])->name('order.quick');
    Route::post('/buy-quick/{url}', [OrderAuthController::class,'accept_buy_quick'])->name('order.acceptQuick');
});
Route::group(['prefix'=> 'profile-user'], function () {
    Route::get('/', [ProfileUserController::class,'index'])->name('profile.indexUser');
    Route::post('/update', [ProfileUserController::class,'update'])->name('profile.updateTo');
    Route::post('/change-password', [ProfileUserController::class,'change_password'])->name('profile.password');
    Route::post('/add-address',[ProfileUserController::class,'add_address'])->name('profile.moreAddress');
    Route::delete('/delete-address/{id}', [ProfileUserController::class,'delete_address'])->name('profile.deleteAddress');
    Route::post('/update-address/{id}', [ProfileUserController::class,'update_address'])->name('profile.updateAddress');
    Route::post('/remove-order/{id}', [ProfileUserController::class,'remove_order'])->name('profile.removeOrder');
    Route::get('/delete-user', [ProfileUserController::class,'delete_user'])->name('profile.delete');
});
Route::get('/cate/{slug}',[CategoryAuthController::class,'index'])->name('cate.index');
Route::get('/cate/{slug}/{slug_E}',[CategoryAuthController::class,'cate_show'])->name('cate.show');

