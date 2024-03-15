@extends('user.layouts.app')
@section('title')
Giỏ hàng
@endsection
@section('main')
<div class="pagetitle">
    <h1>Giỏ hàng</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('sanpham.index')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active">Giỏ hàng</li>
        </ol>
    </nav>
</div>
<div class="col-12">
    <div class="card top-selling overflow-auto">
        <div class="card-body pb-0">
            <h5 class="card-title">Danh sách sản phẩm</h5>
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th></th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th>Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cart->list() as $key => $item)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td scope="row">
                        <a href="{{route('sanpham.show',$item['slug'])}}">
                            <img src="{{asset('storage')}}/images/{{$item['image']}}" alt="" class="rounded mx-auto d-block" style="width: 120px;">
                        </a>
                    </td>
                    <td><a class="text-decoration-none fw-bold" href="{{route('sanpham.show',$item['slug'])}}" class=" text-dark text-decoration-none">{{$item['name']}}</a></td>
                    <td><span id="price">{{$item['price']}}</span></td>
                    <td>
                        <div class="input-group">
                            <a href="{{route('cart.updateDown',['id'=>$item['productId']])}}" class="btn btn-outline-secondary" type="button">-</a>
                            <input  type="text" class="form-control text-center" value="{{$item['quantity']}}" style="width: 10px" disabled>
                            <a href="{{route('cart.updateUp',['id'=>$item['productId']])}}" class="btn btn-outline-secondary" type="button">+</a>
                        </div>
                    </td>
                    <td>
                        <span id="price">
                            {{$item['price']*$item['quantity']}}
                        </span>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <h5 class="m-1">Tổng tiền: <span id="price">{{$cart->getToTalPrice()}}</span></h5>
                </div>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="m-1"><a href="{{route('cart.clear')}}" type="button" class="btn btn-danger">Xóa tất cả</a></div>
                    <div class="m-1"><a href="{{route('order.list')}}" type="button" class="btn btn-success">Đặt hàng</a></div>
                </div>
            </div>
        </div>
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
