@extends('user.layouts.app')
@section('title')
Sản phẩm chi tiết
@endsection
@section('custom_css')
<style>
    .card .card-body h6 {
        height: 5em;
        overflow: hidden;
    }
    .bg-image {
        position: relative;
    }

    .proloop-label--top {
        position: absolute;
        top: 0rem;
        left: 0rem;
        width: 5rem;
        z-index: 1;
    }
    .proloop-label--top div{
        background: #E30019;
        border-radius: 10px;
    }

</style>
@endsection
@section('main')
<div class="pagetitle">
    <h1>Sản phẩm</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('sanpham.index')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active">{{$sanpham->name}}</li>
        </ol>
    </nav>
</div>
<div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <div class="bg-image border rounded-4 mb-3 d-flex justify-content-center">
                        @if ($sanpham->sale>0)
                        <div class="proloop-label--top">
                            <div class="text-center">
                                <span class="text-light label">-{{percent($sanpham->sale,$sanpham->price)}}%</span>
                            </div>
                        </div>
                        @endif
                        <img style="max-width: 21rem; max-height:21rem; margin: auto; object-fit:cover" class="rounded-4 fit" src="{{asset('storage')}}/images/{{$sanpham->image}}" />
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        @foreach ($sanpham->images as $item)
                        <div data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="" class="item-thumb">
                            <img width="60" height="60" class="rounded-2" src="{{asset('storage')}}/images/{{$item->image}}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="false" role="tab" tabindex="-1">Tổng quan</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" role="tab" tabindex="-1">Chi tiết sản phẩm</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" role="tab" tabindex="-1">Mô tả sản phẩm</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="true" role="tab">Bình luận sản phẩm</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                            <div class="tab-body " style="max-height: 24rem; overflow-y: scroll;">
                                <span class="text-muted"></span>
                                <h4 class="title text-dark">{{$sanpham->name}}</h4>
                                <div class="d-flex flex-row my-3">
                                    <div class="text-warning me-2 mb-1">
                                        {{rating($sanpham->review_avg_rating)}}
                                        <span class="ms-1">
                      @if (number_format($sanpham->review_avg_rating) >0)
                      {{number_format($sanpham->review_avg_rating, 1, ',', '')}}
                      @endif
                    </span>
                                        <span class="label">({{$sanpham->review->count()}} lượt đánh giá)</span>
                                    </div>
                                    <span class="text-muted label"> <span data-feather="shopping-cart" style="transform: scale(0.7);"></span> {{$totalOrder}} lượt mua</span>
                                    <span class="text-muted label"> <span data-feather="message-circle" style="transform: scale(0.7);"></span> {{$sanpham->comment->count()}} lượt bình luận</span>
                                </div>
                                <div class="">
                                    <div class="table-responsive" style="height: 16rem">
                                        <span class="label">Chi tiết cấu hình</span>
                                        <table class="table table-sm">
                                            <tbody>
                                            @php
                                            $count=0;
                                            @endphp
                                            @foreach ($sanpham->details as $item)
                                            @if ($count<5)
                                            @php
                                            $count++;
                                            @endphp
                                            <tr>
                                                <td scope="row">{{$loop->iteration}}</td>
                                                <td class="label">{{$item->key_detail}}</td>
                                                <td>{{$item->value_detail}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-foot d-flex justify-content-end " style="right:10px">
                <span  class="flex-grow-1 label">
                  @if ($sanpham->sale>0)
                  <span class="text-muted"><del>Giá niêm yết: <span id="price">{{$sanpham->price}}</span></del></span>
                  <span class="text-danger">Giá khuyến mãi: <span id="price"> {{$sanpham->sale}}</span></span>
                  @else
                  <span  class="text-danger">Giá khuyến mãi: <span id="price">{{$sanpham->price}}</span></span>
                  @endif
                </span>
                                <form action="{{route('cart.addto')}}" method="get" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$sanpham->id}}">
                                    <div class="d-flex align-items-center">
                                        <div class="input-group" style="width: 8rem;">
                                            <button class="btn btn-white border border-secondary px-3" type="button" id="decrease" data-mdb-ripple-color="dark">-</button>
                                            <input type="text" class="form-control text-center border border-secondary" name="quantity" id="quantity" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                            <button class="btn btn-white border border-secondary px-3" type="button" id="increase" data-mdb-ripple-color="dark">+</button>
                                        </div>
                                        <div class="btn-group m-1" role="group">
                                            <button type="submit" class="btn btn-secondary"><span data-feather="shopping-cart"></span></button>
                                            <a href="{{route('order.quick', $sanpham->slug)}}" id="buy-quick" class="btn btn-warning label">Mua ngay</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                            <div class="table-responsive" style="max-height: 24rem">
                                <span class="label table-sm">Chi tiết cấu hình đầy đủ</span>
                                <table class="table">
                                    <tbody>
                                    @foreach ($sanpham->details as $item)
                                    <tr>
                                        <td scope="row">{{$loop->iteration}}</td>
                                        <td class="label">{{$item->key_detail}}</td>
                                        <td>{{$item->value_detail}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">
                            <div style="max-height: 24rem; overflow-y: scroll;">
                                <p>{!!$sanpham->description!!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                            <div class="bg-body rounded shadow-sm" style="max-height: 24rem; overflow-y: scroll;">
                                <h5 class="label h6">Bình luận của khách hàng</h5>
                                @foreach ($sanpham->comment as $item)
                                <div class="d-flex text-muted p-2">
                                    <img src="{{asset('image')}}/user.jpg" alt="" class="bd-placeholder-img flex-shrink-0 me-2 rounded" style="width: 32px;height:32px">
                                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                        <div class="d-flex justify-content-between">
                                            <span class="label">{{$item->user->name}}</span>
                                            <span >{{convertTime($item->created_at)}}</span>
                                        </div>
                                        <p class="h6">{{$item->comment}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3 class="label">Sản phẩm liên quan</h3>
        <div  class="container parent">
            @foreach ($products as $item)
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
</div>
@endsection
@section('custom_js')
<script>
    document.getElementById('increase').addEventListener('click', function () {
        document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value, 10) + 1;
    });

    document.getElementById('decrease').addEventListener('click', function () {
        if (parseInt(document.getElementById('quantity').value, 10) > 1) {
            document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value, 10) - 1;
        }
    });
</script>
<script>
    const prices = document.querySelectorAll('#price');
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    prices.forEach(price => {
        const value = price.textContent;
        price.textContent = VND.format(value);
    });
</script>
@endsection
