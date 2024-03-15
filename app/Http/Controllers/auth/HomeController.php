<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $topProduct = Product::withAvg('review', 'rating')->orderBy('review_avg_rating','desc')->where('status',1)->take(5)->get();
        return view('user.index',compact('topProduct'));
    }
}
