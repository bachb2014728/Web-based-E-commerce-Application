<?php

namespace App\Http\Controllers\auth;

use App\Helper\Cart;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ListAddressUser;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $prices_1 = Order::where('user_id', Auth::user()->id)->where('status','=',1)->sum('totalPrice');
        $prices = Order::where('user_id', Auth::user()->id)->where('status','!=',-1)->sum('totalPrice');
        $prices_cancel = Order::where('user_id', Auth::user()->id)->where('status','=',-1)->sum('totalPrice');
        $users = Order::where('user_id', Auth::user()->id)->latest('updated_at')->get();
        $users_0 = Order::where('user_id', Auth::user()->id)->where('status','0')->latest('updated_at')->get();
        $users_1 = Order::where('user_id', Auth::user()->id)->where('status','1')->latest('updated_at')->get();
        $users_2 = Order::where('user_id', Auth::user()->id)->where('status','-1')->latest('updated_at')->get();
        return view('user.orders.index',compact('prices_1','users','users_1','users_0','users_2','prices','prices_cancel'));
    }
    public function form(){
        return view('user.orders.form');
    }
    public function submit_form(Request $request, Cart $cart){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $addr = $this->findAddress($request->id_addr);
            if($order = Order::create([
                'user_id' => Auth::user()->id,
                'name' =>$addr['name'],
                'phone' => $addr['phone'],
                'address'=> $addr['address'],
                'status' => 0,
                'totalPrice'=> $cart->getTotalPrice(),
                'note'=>$request->note
            ])){
                $order_id = $order->id;

                foreach ($cart->items as $product_id => $item) {
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                    OrderDetail::create([
                        'order_id' => $order_id,
                        'product_id' => $product_id,
                        'quantity' => $quantity,
                        'price' => $price,
                    ]);
                }
                Activity::create([
                    'user_id'=> Auth::user()->id,
                    'key_active'=>2,
                    'value_active' => 'buy_order',
                    'name_active'=> 'Đặt hàng',
                ]);

                session(['cart'=>'']);

                return redirect()->route('order.show',$order_id)->with('success','Đặt hàng thành công');
            }
            return redirect()->back()->with('error','Đặt hàng thất bại x2');
        }catch (\Throwable $th) {
            return redirect()->back()->with('error','Đặt hàng thất bại');
        }

    }
    public function message_order(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $order = Order::find($id);
        return view('user.orders.message',compact('order'));
    }
    public function edit_order(Request $request,$id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $order = Order::where('id', $id)->first();
        return view('user.orders.update',compact('order'));
    }
    public function update_order(Request $request,string $id){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {

            $order = Order::where('id', $id)->first();
            if($request->id_addr == -1 && $order->note == $request->note){
                return redirect()->route('order.show',$order->id)->with('success','Không thay đổi');
            }
            else if($order->note !== $request->note){
                $order->note = $request->note;
                $order->save();
                Activity::create([
                    'user_id'=> Auth::user()->id,
                    'key_active'=>2,
                    'value_active' => 'update_order',
                    'name_active'=> 'Cập nhật đơn hàng',
                ]);
                return redirect()->rote('order.show',$order->id)->with('success','Thay đổi ghi chú thành công');
            }
            else {
                $addr = $this->findAddress($request->id_addr);
                $order->name = $addr['name'];
                $order->phone = $addr['phone'];
                $order->address = $addr['address'];
                $order->note = $request->note;
                $order->save();
                Activity::create([
                    'user_id'=> Auth::user()->id,
                    'key_active'=>2,
                    'value_active' => 'update_order',
                    'name_active'=> 'Cập nhật đơn hàng',
                ]);
                return redirect()->route('order.show',$order->id)->with('success','Thay đổi địa chỉ thành công');
            }


        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Thay đổi địa chỉ thất bại');
        }
    }
    public function buy_quick(Request $request,$slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $product = Product::where('slug',$slug)->first();
            Activity::create([
                'user_id'=> Auth::user()->id,
                'key_active'=>2,
                'value_active' => 'buy_order',
                'name_active'=> 'Đặt hàng',
            ]);
            return view('user.orders.buy_quick',compact('product'))->with('success','Mua hàng nhanh thành công');
        } catch (\Throwable $th) {
            return back()->with('fail','Mua hàng nhanh thất bại');
        }
    }
    public function accept_buy_quick(Request $request,$slug){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $addr = $this->findAddress($request->id_addr);
            $product = Product::where("slug",$slug)->first();
            if($order = Order::create([
                'user_id' => $addr['user_id'],
                'name' =>  $addr['name'],
                'phone' => $addr['phone'],
                'address'=> $addr['address'],
                'status' => 0,
                'totalPrice'=> tich($request->quantity, $request->price),
                'note'=>$request->note
            ])){
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $request->quantity,
                    'price' => $request->price,
                ]);
            }
            return redirect()->route('order.show',$order->id)->with('success','Đã mua thành công');
        } catch (\Throwable $th) {
            return back()->with('fail','Lỗi thanh toán');
        }
    }
    public function findAddress($id){
        if($id == 0){
            $address = [
                'user_id'=> Auth::user()->id,
                'name'=> Auth::user()->name,
                'phone'=> Auth::user()->phone,
                'address'=> Auth::user()->address,
            ];
        }
        else{
            $address = ListAddressUser::where('id',$id)->first();
        }
        return $address;

    }
}
