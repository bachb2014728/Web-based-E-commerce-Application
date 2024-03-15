<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\CategoriesProducts;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryAuthController extends Controller
{
    public function index($slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $cate = Category::where("slug",$slug)->first();
        //root
        $cateR = Category::where("id",$cate->parent_cate)->first();
        //lay sp
        $cateE = '0';
        $catePros = CategoriesProducts::where("category_id",$cate->id)->get();
        //lay ae
        $cateElement = Category::where("parent_cate",$cate->id)->get();
        //
        $pros = [];
        foreach ($catePros as $key => $value) {
            $pros[$key] = Product::withAvg('review', 'rating')->where('id', $value->product_id)->first();
        }
        return view("user.categories.index",compact('cateR',"pros","cate","cateElement",'cateE'));
    }
    public function cate_show($slug,$slugE): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $cate = Category::where("slug",$slug)->first();
        //root
        $cateR = Category::where('id',$cate->parent_cate)->first();
        //lay sp;
        $cateEw = Category::where("slug",$slugE)->first();
        $catePros = CategoriesProducts::where("category_id",$cateEw->id)->get();
        $cateE = $cateEw->id;
        //
        $cateElement = Category::where("parent_cate",$cate->id)->get();
        //
        $pros = [];
        foreach ($catePros as $key => $value) {
            $pros[$key] = Product::withAvg('review', 'rating')->where('id', $value->product_id)->first();
        }

        return view("user.categories.index",compact('cateR',"pros","cate","cateElement",'cateE'));
    }
}
