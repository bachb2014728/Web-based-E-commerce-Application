<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\CategoriesProducts;
use App\Models\Comment;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductAuthController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $topRating = Product::withAvg('review', 'rating')
                ->orderBy('review_avg_rating', 'desc')
                ->paginate(100);
            return view("user.products.index",compact('topRating'));
        } catch (\Throwable $th) {
            return back()->with('fail','Truy cập trang thất bại');
        }
    }
    public function show($slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $sanpham = Product::withAvg('review', 'rating')->where('slug', $slug)->first();

        $totalOrder = OrderDetail::join('orders', 'order_id', '=', 'orders.id')
            ->where('product_id', $sanpham->id)
            ->where('orders.status', 1)
            ->sum('quantity');


        $cate = CategoriesProducts::where('product_id',$sanpham->id)->first();
        if ($cate == null) {
            $products = Product::withAvg('review', 'rating')->where('id','!=',$sanpham->id)->get();
        }else{
            $products = Product::withAvg('review', 'rating')->where('category_id',$cate->category_id)->where('id','!=',$sanpham->id)->get();
        }
        return view('user.products.show',compact('sanpham','products','totalOrder'));
    }
    public function cart(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.cart');
    }
    public function rateProduct(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $rating = Review::firstOrNew([
            'user_id' => auth()->id(),
            'product_id' => $id,
        ]);

        $rating->rating = $request->input('rating');
        $rating->save();

        return back()->with('success','Đánh giá về sản phẩm thành công');
    }

    public function postComment(Request $request, String $id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        Comment::create([
            'user_id' => auth()->id(),
            'product_id' => $id,
            'comment' => $request->input('comment')
        ]);
        return back()->with('success','Bình luận về sản phẩm thành công');
    }
    public function deleteComment(Request $request, String $id): \Illuminate\Http\RedirectResponse
    {
        $cmt = Comment::find($id);
        $cmt->delete();
        return back()->with('success','Xóa bình luận thành công');
    }

}
