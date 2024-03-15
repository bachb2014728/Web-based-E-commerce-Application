@extends('user.layouts.app')
@section('title')
Thay đổi địa chỉ
@endsection
@section('main')
<div class="pagetitle">
    <h1>Cập nhật đơn hàng</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('cart.index')}}">Giỏ hàng</a></li>
            <li class="breadcrumb-item active">Cập nhật</span></li>
        </ol>
    </nav>
</div>
<div class="container">
    <form method="POST" action="{{route('order.update',$order->id)}}">
        @csrf
        <label>Địa chỉ nhận</label>
        <select name="id_addr" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="-1" selected>
                <span>Tên người nhận: {{$order->name}} | </span>
                <span>Số địa thoại: {{$order->phone}} | </span>
                <span>Địa chỉ nhận: {{$order->address}} -- Hiện tại --</span>
            </option>
            @foreach (Auth::user()->diachi as $item)
            <option value="{{$item->id}}">
                <span>Tên người nhận: {{$item->name}} | </span>
                <span>Số địa thoại: {{$item->phone}} | </span>
                <span>Địa chỉ nhận: {{$item->address}}</span>
            </option>
            @endforeach
            @if ($order->name != Auth::user()->name && $order->phone != Auth::user()->phone && $order->address != Auth::user()->address )
            <option value="0">
                <span>Tên người nhận: {{Auth::user()->name}} | </span>
                <span>Số địa thoại: {{Auth::user()->phone}} | </span>
                <span>Địa chỉ nhận: {{Auth::user()->address}}</span>
            </option>
            @endif
        </select>
        <label>Thông tin sản phẩm </label>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th scope="col">Tên sản phẩm</th>
                <th>Số lượng</th>
                <th scope="col">Thành tiền</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($order->order_detail as $key => $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->product->name}}</td>
                <td>{{$item->quantity}}</td>
                <td><span id="price">{{$item->price * $item->quantity}}</span></td>
                <td></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">
                    <div class="input-group">
                        <span class="input-group-text">Ghi chú</span>
                        <input type="text" class="form-control" placeholder="Thêm ghi chú nếu cần" name="note" value="{{$order->note}}">
                    </div>
                </td>
                <td><h6 class="m-1 text-danger">Tổng tiền: <span id="total"><p id="price">{{$order->totalPrice}}</p></span></h6></td>
                <td><a type="button" class="btn btn-sm btn-danger" onclick="clearNote()">Xóa ghi chú</a></td>
            </tr>
            </tbody>
        </table>
        <div class=" d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
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
<script>
    function clearNote() {
        var note = document.querySelector('input[name=note]');
        note.value = '';
    }
</script>
@endsection
