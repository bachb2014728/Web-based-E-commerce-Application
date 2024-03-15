@extends('admin.layouts.app')
@section('title')
Đơn hàng
@endsection
@section('custom_css')
<style>
    .modal-dialog-big {
        max-width: 80%;
    }
    .table tbody {
        display: block;
        overflow-y: auto;
        max-height: 300px;
    }
    .table thead, .table tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed; /* không thay đổi kích thước khi cuộn */
    }
    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }
</style>
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí đơn hàng</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đơn hàng </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Duyệt đơn hàng</h5>
                <p class="label">Danh sách đơn hàng mà khách hàng đã đặt</p>
                <table class="table table-sm">
                    <thead class="thead">
                    <tr>
                        <th scope="col" >#</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ nhận</th>
                        <th class="text-center" scope="col">Tổng tiền</th>
                        <th scope="col">Ngày tạo</th>
                        <th  scope="col">Chức năng</th>
                        <th scope="col" style="width: 15rem">Thông báo</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                    @php
                    $count = 0;
                    @endphp
                    @foreach ($order as $item)
                    @if ($item->status == 0)
                    @php
                    $count ++;
                    @endphp
                    <tr class="tr">
                        <td>{{$count}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td class="text-center" id="price">{{$item->totalPrice}}</td>
                        <td>{{convertTime($item->created_at)}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal_{{$item->id}}">Xem</button>
                                <div class="modal fade" id="exampleModal_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-big" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xem danh sách sản phẩm trong đơn hàng của {{$item->name}}</h5>
                                                <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> <span data-feather="x"></span></span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th scope="col">Hình ảnh</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th>Giá niêm yết</th>
                                                            <th scope="col">Giá</th>
                                                            <th>Số lượng</th>
                                                            <th scope="col">Thành tiền</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($item->order_detail as $bills)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td scope="row">
                                                                <img src="{{asset('storage')}}/images/{{$bills->product->image}}" alt="" class="rounded mx-auto d-block" style="width: 7rem;">
                                                            </td>
                                                            <td>{{$bills->product->name}}</td>
                                                            <td id="price">{{$bills->product->price}}</td>
                                                            <td id="price">{{$bills->price}}</td>
                                                            <td>{{$bills->quantity}}</td>
                                                            <td>
                                              <span>
                                                  {{number_format($bills->price*$bills->quantity)}}
                                              </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="d-flex flex-row-reverse bd-highlight">
                                                        <div class="p-2">| Tổng tiền: <strong id="price">{{$item->totalPrice}}</strong></div>
                                                        <div class="p-2 "><span class="badge bg-secondary">Ghi chú</span> :{{$item->note}}</div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-warning btn-sm" href="{{route('order.accept',$item->id)}}">Duyệt</a>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-warning btn-sm" href="{{route('order.accept',$item->id)}}">Duyệt</a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal_{{$item->id}}_delete">Hủy đơn</button>
                                <div class="modal fade" id="exampleModal_{{$item->id}}_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Phản hồi lí do hủy đơn hàng đơn hàng của {{$item->name}}</h5>
                                                <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> <span data-feather="x"></span></span>
                                                </button>
                                            </div>
                                            <form action="{{route('order.cancel',$item->id)}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text" id="inputGroup-sizing-lg">Lí do</span>
                                                        <input type="text" name="rep" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger btn-sm" type="submit">Hủy đơn</button>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style="width: 15rem">
                            @foreach ($item->order_detail as $obj)
                            @if ($obj->quantity > $obj->product->quantity)
                            <span class="label text-danger">Số lượng {{$obj->product->name}} trong kho còn thấp : <strong> {{$obj->product->quantity}}</strong></span><br>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

            @if ($order->count() > 0)
            <p class="text-end"><strong>Tổng số hóa đơn : <span class="badge bg-secondary">{{$count}}</span></strong></p>
            @endif
        </div>
    </div>
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Danh sách đơn hàng</h5>
                <p class="label">Tất cả đơn hàng mà khách hàng đã đặt , hủy và đã duyệt</p>
                <table class="table table-sm">
                    <thead class="thead">
                    <tr>
                        <th scope="col" class="stt">#</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Ngày tạo</th>
                        <th>Ngày duyệt</th>
                        <th>Xem chi tiết</th>
                        <th scope="col">Trạng thái đơn hàng</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                    @foreach ($order as $item)
                    <tr class="tr">
                        <td class="stt">{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td id="price">{{$item->totalPrice}}</td>
                        <td>{{convertTime($item->created_at)}}</td>
                        <td>{{convertTime($item->updated_at)}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal_{{$item->id}}_detail">Xem</button>
                                <div class="modal fade" id="exampleModal_{{$item->id}}_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-big" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xem danh sách sản phẩm trong đơn hàng của {{$item->name}}</h5>
                                                <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> <span data-feather="x"></span></span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th scope="col">Hình ảnh</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th>Giá niêm yết</th>
                                                            <th scope="col">Giá</th>
                                                            <th>Số lượng</th>
                                                            <th scope="col">Thành tiền</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($item->order_detail as $bills)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td scope="row">
                                                                <img src="{{asset('storage')}}/images/{{$bills->product->image}}" alt="" class="rounded mx-auto d-block" style="width: 7rem;">
                                                            </td>
                                                            <td>{{$bills->product->name}}</td>
                                                            <td id="price">{{$bills->product->price}}</td>
                                                            <td id="price">{{$bills->price}}</td>
                                                            <td>{{$bills->quantity}}</td>
                                                            <td>
                                              <span id="price">
                                                  {{$bills->price*$bills->quantity}}
                                              </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="d-flex flex-row-reverse bd-highlight">
                                                        <div class="p-2">| Tổng tiền: <strong>{{number_format($item->totalPrice)}}</strong></div>
                                                        <div class="p-2 "><span class="badge bg-secondary">Ghi chú</span> :{{$item->note}}</div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('order.delete', $item->id) }}" method="post" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Bạn chắc chắn xóa hóa đơn ?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </div>

                        </td>
                        <td>
                            @if ($item->status == 0)
                            <span class="badge bg-warning text-dark">Chờ duyệt đơn</span>
                            @elseif($item->status == 1)
                            <span class="badge bg-success">Đã đặt hàng</span>
                            @else
                            <span class="badge bg-danger">Đã hủy</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @if ($order->count() > 0)
            <p class="text-end"><strong>Tổng số hóa đơn :<span class="badge bg-secondary">{{$order->count()}}</span></strong></p>
            @endif
        </div>
    </div>
</main>
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
