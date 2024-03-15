@extends('user.layouts.app')
@section('title')
Thanh toán
@endsection
@section('main')
<div class="pagetitle">
    <h1>Thanh toán</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('cart.index')}}">Giỏ hàng</a></li>
            <li class="breadcrumb-item active">Tổng tiền : <span id="price">{{$cart->getToTalPrice()}}</span></li>
        </ol>
    </nav>
</div>
<div class="container">
    <form method="POST" action="{{route('order.complete')}}">
        @csrf
        <label>Địa chỉ nhận</label>
        <select name="id_addr" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="0" selected>
                <span>Tên người nhận: {{Auth::user()->name}} | </span>
                <span>Số địa thoại: {{Auth::user()->phone}} | </span>
                <span>Địa chỉ nhận: {{Auth::user()->address}}</span>
            </option>
            @foreach (Auth::user()->diachi as $item)
            <option value="{{$item->id}}">
                <span>Tên người nhận: {{$item->name}} | </span>
                <span>Số địa thoại: {{$item->phone}} | </span>
                <span>Địa chỉ nhận: {{$item->address}}</span>
            </option>
            @endforeach
        </select>
        <label>Thông tin sản phẩm </label>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th>Thành tiền</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cart->list() as $key => $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['quantity']}}</td>
                <td id="price">{{($item['price'])}}</td>
                <td><span id="price">{{($item['price']*$item['quantity'])}}</span></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Ghi chú</span>
                        <input type="text" class="form-control" placeholder="Thêm ghi chú nếu cần" name="note" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
                <td><a type="button" class="btn btn-sm btn-danger" onclick="clearNote()">Xóa ghi chú</a></td>
                <td>
                    <h6 class="m-1 text-danger">Tổng tiền: <span id="total"> <span id="price">{{$cart->getToTalPrice()}}</span></span></h6>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-sm">Mua hàng</button>
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
