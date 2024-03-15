<?php

namespace App\Http\Controllers\auth;

use App\Helper\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cart(Cart $cart)
    {
        return view('user.cart',compact('cart'));
    }
    public function add(Request $request,Cart $cart): \Illuminate\Http\RedirectResponse
    {
        $product = Product::find($request->id);
        $quantity = 1;
        $cart->add($product,$quantity);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
    public function addToCart(Request $request,Cart $cart): \Illuminate\Http\RedirectResponse
    {
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product,$quantity);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
    public function removeCart(Cart $cart,$id): \Illuminate\Http\RedirectResponse
    {
        $cart->remove($id);
        return redirect()->back()->with('success','Xóa sản phẩm thành công');
    }
    public function updateCartUp(Cart $cart,$id): \Illuminate\Http\RedirectResponse
    {
        $quantity = request()->quantity ? request()->quantity :1;
        $cart->updateUp($id,$quantity);
        return redirect()->back()->with('success', 'Cập nhật số lượng thành công');
    }
    public function updateCartDown(Cart $cart,$id): \Illuminate\Http\RedirectResponse
    {
        $quantity = request()->quantity ? request()->quantity :1;
        $cart->updateDown($id,$quantity);
        return redirect()->back()->with('success', 'Cập nhật số lượng thành công');
    }
    public function clearCart(Cart $cart): \Illuminate\Http\RedirectResponse
    {
        $cart->clear();
        return redirect()->back()->with('success','Xóa tất cả sản phẩm khỏi giỏ hàng thành công');
    }
}
