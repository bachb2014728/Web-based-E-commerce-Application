<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $cate = Category::all();
        $product = Product::all();
        $order_accept = Order::where('status','!=',-1)->get();
        $order_success = Order::where('status',1)->get();
        $order_fail = Order::where('status',-1)->get();
        $user = User::where('role',0)->get();

        $totalToday = Order::where('status',1)->whereDate('created_at', '=', date('Y-m-d'))->sum('totalPrice');

        //

        $quarters = [
            1 => ['start' => '01-01', 'end' => '03-31'],
            2 => ['start' => '04-01', 'end' => '06-30'],
            3 => ['start' => '07-01', 'end' => '09-30'],
            4 => ['start' => '10-01', 'end' => '12-31'],
        ];

        $year = date('Y');
        $totals = [];
        foreach ($quarters as $quarter => $dates) {
            $start = date($year . '-' . $dates['start']);
            $end = date($year . '-' . $dates['end']);

            $total = Order::where('status',1)
                ->whereBetween('created_at', [$start, $end])
                ->sum('totalPrice');

            $totals["Quý $quarter"] = $total;
        }
        $month = date('n');
        $quarter = ceil($month / 3);

        $arr_total = [
            'keys' => 'Quý '.$quarter. ' : '. date('m-Y'),
            'values' => $totals['Quý '.$quarter]
        ];

        //dd($arr_total)

        $mostPurchased = OrderDetail::whereHas('order', function ($query) {
            $query->where('status', '1');
        })->select('product_id', DB::raw('SUM(quantity) as total_quantity'))->groupBy('product_id')->orderBy('total_quantity', 'desc')->first();

        if ($mostPurchased == null) {
            $product_trend = null;
        } else {
            $product_trend = Product::find($mostPurchased->product_id);
        }
        $mostPopular =  OrderDetail::whereHas('order', function ($query) {
            $query->where('status', '1');
        })->select('product_id', DB::raw('COUNT(product_id) as total_orders'))
            ->groupBy('product_id')
            ->orderBy('total_orders', 'desc')
            ->first();

        if ($mostPopular == null) {
            $product_popular = null;
        } else {
            $product_popular = Product::find($mostPopular->product_id);
        }


        //dd($mostPopular)

        $topBuyer = User::select('users.id', 'users.name', DB::raw('count(orders.id) as total_orders'))
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('orders.status', 1)
            ->groupBy('users.id', 'users.name')
            ->orderBy('total_orders', 'desc')
            ->first();


        // dd($topBuyer);

        $topValuer = User::select('users.id', 'users.name', DB::raw('SUM(orders.totalPrice) as total_value'))
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('orders.status', 1)
            ->groupBy('users.id', 'users.name')
            ->orderBy('total_value', 'desc')
            ->first();

        // dd($topValuer);

        $mostActive = User::select('users.id', 'users.name', DB::raw('count(comments.id) as total_comments'))
            ->join('comments', 'users.id', '=', 'comments.user_id')
            ->groupBy('users.id', 'users.name')
            ->orderBy('total_comments', 'desc')
            ->first();

        // dd($mostActive);
        if (Review::count() > 0) {
            $topRatedProduct = Product::select('products.id','products.name', DB::raw('AVG(reviews.rating) as average_rating'))
                ->join('reviews', 'products.id', '=', 'reviews.product_id')
                ->groupBy('products.id','products.name')
                ->orderBy('average_rating', 'desc')
                ->first();
        }else{
            $topRatedProduct = null;
        }


        // dd($topRatedProduct);

        $percent_cancel = User::select('users.id','users.name',
            DB::raw('COUNT(CASE WHEN orders.status = -1 THEN 1 END) as cancelled_orders'),
            DB::raw('COUNT(orders.id) as total_orders'),
            DB::raw('(COUNT(CASE WHEN orders.status = -1 THEN 1 END)/COUNT(orders.id))*100 as percentage'))
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id','users.name')
            ->orderBy(DB::raw('(COUNT(CASE WHEN orders.status = -1 THEN 1 END)/COUNT(orders.id))*100'), 'desc')
            ->first();

        // dd($percent_cancel);

        $cmt = Comment::count();
        //
        $topCategories = Category::withCount('products')->latest('products_count')->take(10)->get();
        // dd($topCategories[0]);
        return view('admin.dashboard',compact('cmt','topCategories','topRatedProduct','mostActive','topValuer','topBuyer','mostPurchased','product_popular','mostPopular','cate','product','order_success','order_fail','user','order_accept','totalToday','arr_total','product_trend'));
    }
}
