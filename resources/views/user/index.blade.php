@extends('user.layouts.app')
@section('title')
Trang chủ
@endsection
@section('main')
<div class="pagetitle">
    <h1>Trang chủ</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-sm">
        <div class="d-flex flex-column mb-3">
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con1.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con2.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con3.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image')}}/banner1.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('image')}}/banner2.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image')}}/banner3.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-sm">
        <div class="d-flex flex-column mb-3">
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con4.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con5.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
            <div class="p-2">
                <img src="{{asset('image')}}/banner-con6.webp" alt="" class="bd-placeholder-img rounded" style="width: 100%">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <h3 class="label">Sản phẩm nổi bật</h3>
    <div  class="container parent">
        @foreach ($topProduct as $item)
        <div class="card item">
            <div class="bg-image hover-overlay ripple">
                @if ($item->sale > 0)
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
