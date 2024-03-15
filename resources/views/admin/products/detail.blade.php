
@extends('admin.layouts.app')
@section('title')
Sản phẩm - Thêm chi tiết sản phẩm
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mô tả chi tiết</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('product.index')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm mô tả chi tiết : {{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row g-5">
        <div class="col-md-6 col-lg-5 order-md-last">
            <div class="col-12">
                <div class=" pt-3 pb-2 mb-3 border-bottom">
                    <h6 class="sidebar-heading d-flex justify-content-center align-items-center text-muted">
                        <span>Danh sách chi tiết</span>
                    </h6>
                </div>
                <ul class="list-group ">
                    @foreach ($product->details as $value)
                    <div class="list-group-item d-flex justify-content-between lh-sm mt-0">
                        <small class="text-muted"><strong>{{$value->key_detail}}</strong> : {{$value->value_detail}}</small>
                        <div class="btn-group">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal_{{$value->id}}"><i class="fa fa-edit"></i></button>
                            <div class="modal fade" id="exampleModal_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-big" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Cập nhật chi tiết sản phẩm</h5>
                                            <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"> <span data-feather="x"></span></span>
                                            </button>
                                        </div>
                                        <form action="{{ route('product.updateDetail',$value->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="input-group m-1">
                                                    <span class="input-group-text">Chi tiết {{$value->id}}</span>
                                                    <input type="text" aria-label="First name" name="key" value="{{$value->key_detail}}" class="form-control" placeholder="Tên chi tiết">
                                                    <input type="text" aria-label="Last name" name="value" value="{{$value->value_detail}}" class="form-control" placeholder="Giá trị chi tiết">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-warning btn-sm" type="submit">Cập nhật</button>
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form
                                action="{{ route('product.deleteDetail', $value->id) }}"
                                method="POST" type="button" class="btn btn-danger btn-sm p-0"
                                onsubmit="return confirm('Có chắc chắn xóa chưa?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm m-0 "><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-7">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Thêm chi tiết : {{$product->name}}</span>
                    <a class="link-secondary text-decoration-none" href="{{route('product.index')}}" aria-label="Add a new report">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </div>
            <form action="{{route('product.addDetail',$product->id)}}" method="POST"  >
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div id="container">
                    <div class="input-group m-1">
                        <span class="input-group-text">Chi tiết 1</span>
                        <input type="text" aria-label="First name" name="tdct_1" class="form-control" placeholder="Tên chi tiết">
                        <input type="text" aria-label="Last name" name="ct_1" class="form-control" placeholder="Giá trị chi tiết">
                    </div>
                    <div class="input-group m-1">
                        <span class="input-group-text">Chi tiết 2</span>
                        <input type="text" aria-label="First name" name="tdct_2" class="form-control" placeholder="Tên chi tiết">
                        <input type="text" aria-label="Last name" name="ct_2" class="form-control" placeholder="Giá trị chi tiết">
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-rounded btn-block mt-3">Xác nhận</button>
                    <a type="button" class="btn btn-secondary btn-rounded btn-block mt-2" onclick="addInput()">Thêm chi tiết</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@section('custom_js')

<script>
    let count = 2;
    function addInput() {
        count++;
        var container = document.getElementById("container");
        var label = document.createElement("div");
        label.innerHTML =`
            <div class="input-group m-1">
                <span class="input-group-text">Chi tiết ${count}</span>
                <input type="text" aria-label="First name" name="tdct_${count}" class="form-control" placeholder="Tên chi tiết">
                <input type="text" aria-label="Last name" name="ct_${count}" class="form-control" placeholder="Giá trị chi tiết">
            </div>
        `;
        container.appendChild(label);
    }
</script>
@endsection
