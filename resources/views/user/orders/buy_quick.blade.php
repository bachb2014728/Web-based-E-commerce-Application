@extends('user.layouts.app')
@section('title')
Mua hàng nhanh
@endsection
@section('custom_css')
@endsection
@section('main')
<div class="pagetitle">
    <h1>Thanh toán</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('sanpham.index')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active">{{$product->name}}</li>
        </ol>
    </nav>
</div>
<div class="container">
    <form action="{{route('order.accept',$product->slug)}}" method="POST">
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
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th>Thành tiền</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="{{route('sanpham.show',$product['slug'])}}">
                        <img src="{{asset('storage')}}/images/{{$product['image']}}" alt="" class=" d-block" style="width: 80px;">
                    </a>
                </td>
                <td>
                    <a class="text-decoration-none fw-bold" href="{{route('sanpham.show',$product['slug'])}}" class=" text-dark text-decoration-none">{{$product['name']}}</a>
                </td>
                <td>
                    @if ($product->sale > 0)
                    <input type="hidden" id="price" name="price" value="{{$product['sale']}}">
                    <span id="price">{{number_format($product['sale'])}}</span>
                    @else
                    <input type="hidden" id="price" name="price" value="{{$product['price']}}">
                    <span id="price">{{number_format($product['price'])}}</span>
                    @endif
                </td>
                <td>
                    <input type="hidden" class="form-control" name="quantity" id="quantity" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                    <span id="quantity_view">1</span>
                </td>
                <td>
                    @if ($product->sale > 0)
                    <span id="totalPrice">{{number_format($product['sale'])}}</span>
                    @else
                    <span id="totalPrice">{{number_format($product['price'])}}</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm" type="button" id="decrease" data-mdb-ripple-color="dark">Giảm</button>
                        <button class="btn btn-warning btn-sm" type="button" id="increase" data-mdb-ripple-color="dark">Tăng</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Ghi chú</span>
                        <input type="text" class="form-control" placeholder="Thêm ghi chú nếu cần" name="note" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
                <td><a type="button" class="btn btn-sm btn-danger" onclick="clearNote()">Xóa ghi chú</a></td>
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
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    const quantity = document.getElementById('quantity');
    const quantityView = document.getElementById('quantity_view');
    const totalPrice = document.getElementById('totalPrice');
    const price = document.getElementById('price');
    document.getElementById('increase').addEventListener('click', function () {
        quantity.value = parseInt(quantity.value, 10) + 1;
        quantityView.textContent = parseInt(quantity.value, 10);
        totalPrice.textContent= VND.format(parseInt(quantity.value, 10)* price.value) ;
    });

    document.getElementById('decrease').addEventListener('click', function () {
        if (parseInt(quantity.value, 10) > 1) {
            quantity.value = parseInt(quantity.value, 10) - 1;
            quantityView.textContent = parseInt(quantity.value, 10);
            totalPrice.textContent=  VND.format(parseInt(quantity.value, 10)* price.value) ;
        }
    });

</script>
<script>
    function clearNote() {
        var note = document.querySelector('input[name=note]');
        note.value = '';
    }
</script>
@endsection
