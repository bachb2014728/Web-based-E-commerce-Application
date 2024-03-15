<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getListOrder(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $order = Order::orderBy('created_at', 'desc')->get();
        return view("admin.orders.index",compact("order"));
    }
    public function acceptOneOrder(Request $request,string $id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $order = Order::where("id",$id)->first();
            $order->status = 1;
            $order->updated_at = date("Y-m-d H:i:s");
            foreach ($order->order_detail as $key => $value) {
                if ($value->product->quantity < $value->quantity) {
                    return redirect()->back()->with("fail","Số lượng sản phẩm ".($value->product->name). " không đủ");
                }
            }
            foreach ($order->order_detail as $key => $value) {
                $product = Product::where("id",$value->product_id)->first();
                $product->quantity = $product->quantity - $value->quantity;
                $product->save();
            }
            $order->save();
            return redirect()->back()->with("success","Duyệt thành công đơn hàng");
        } catch (\Throwable $th) {
            return redirect()->back()->with("fail","Duyệt đơn hàng thất bại");
        }
    }
    public function cancelOneOrder(Request $request,$id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $bill = Order::where('id',$id)->first();
            $bill->note = $request->rep;
            $bill->status = -1;
            $bill->save();
            return back()->with('success','Hủy đơn thành công!');
        } catch (\Throwable $th) {
            return back()->with('fail','Lỗi hủy đơn ');
        }

    }
    public function deleteOneOrder($id): \Illuminate\Http\RedirectResponse
    {
        try {
            $bill = Order::where('id',$id)->first();
            $bill->delete();
            return back()->with('success','Xóa đơn hàng thành công');
        } catch (\Throwable $th) {
            return back()->with('fail','Lỗi xóa đơn hàng thất bại');
        }
    }
}
