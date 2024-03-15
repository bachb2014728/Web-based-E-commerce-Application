@extends('user.layouts.app')
@section('title')
Thanh toán - Đã gửi đơn hàng
@endsection
@section('main')
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{asset('image')}}/logo.png" alt="" width="150" height="57">
    <h1 class="display-5 fw-bold d-flex justify-content-center align-items-center">
        <i class="fa fa-check-circle" style="color:green"></i>
        Đã gửi đơn hàng
    </h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 label">Thông tin vận chuyển của bạn: {{$order->name}} , <span>Số điện thoại : {{$order->phone}}</span> , Địa chỉ nhận: {{$order->address}}</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('order.edit', $order->id)}}" type="button" class="btn btn-primary btn-lg px-4 gap-3">
                Thay đổi địa chỉ
            </a>
            <a href="{{route('sanpham.index')}}" type="button" class="btn btn-outline-secondary btn-lg px-4">Tiếp tục mua hàng</a>
        </div>
    </div>
</div>
@endsection
