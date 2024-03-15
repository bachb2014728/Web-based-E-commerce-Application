@extends('user.layouts.app')
@section('title')
Danh mục - Lọc sản phẩm
@endsection
@section('custom_css')
@endsection
@section('main')
<div class="pagetitle">
    <h1>Danh mục</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item">{{$cateR->name}}</li>
            <li class="breadcrumb-item active">{{$cate->name}}</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="btn-group d-flex justify-content-between" role="group">
        @foreach ($cateElement as $item)
        <a href="{{route('cate.show',['slug'=>$cate->slug,'slug_E'=>$item->slug])}}"
           type="button" class="btn btn-light btn-sm {{$item->id == $cateE ? 'active':''}}">{{$item->name}}</a>
        @endforeach
    </div>
    <h4 class="m-2 label text-center">Lọc sản phẩm</h4>
</div>
<div class="container parent mt-2">
    @foreach ($pros as $item)
    <div class="card item">
        <div class="bg-image hover-overlay ripple">
            @if ($item->sale>0)
            <div class="proloop-label--top">
                <div class="text-center">
                    <span class="text-light label">-{{percent($item->sale,$item->price)}}%</span>
                </div>
            </div>
            @endif
            <a href="{{ route('sanpham.show', $item->slug) }}">
                <img style="width: auto;height: 14rem;" src="{{asset('storage')}}/images/{{$item->image}}" class="img-fluid"/>
            </a>
        </div>
        <div class="card-body">
            <a href="{{ route('sanpham.show', $item->slug) }}" class="text-decoration-none text-dark">
                <h6 class="card-title">{{$item->name}}</h6>
            </a>
            <div class="d-flex flex-row ">
                <div class="text-warning">
                    {{rating($item->review_avg_rating)}}
                    <span class="ms-1">
                @if (number_format($item->review_avg_rating) >0)
                {{number_format($item->review_avg_rating, 1, ',', '')}}
                @endif
            </span>
                </div>
                <span class="label">({{$item->review->count()}})</span>
            </div>
            <span id="price" class="label text-danger">
            @if ($item->sale>0)
            {{$item->sale}}
            @else
            {{$item->price}}
            @endif
        </span>
        </div>
        <div class="d-flex justify-content-end" >
            <div class="btn-group">
                <a href="{{ route('cart.add', $item->id) }}" type="button" class="btn btn-secondary btn-sm"><i data-feather="shopping-cart" style="transform: scale(0.7);"></i></a>
                <a href="{{route('order.quick', $item->slug)}}" type="button" class="btn btn-warning label btn-sm">Mua ngay</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('custom_js')
<script>
    const prices = document.querySelectorAll('#price');
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    prices.forEach(price => {
        const value = price.textContent;
        price.textContent = VND.format(value);
    });
</script>
@endsection
