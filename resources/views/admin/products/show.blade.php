@extends('admin.layouts.app')
@section('title')
Sản phẩm - Xem
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sản phẩm</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('product.index')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Xem : {{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <div class="col-12">
                <div class=" pt-3 pb-2 mb-3 border-bottom">
                    <h6 class="sidebar-heading d-flex justify-content-center align-items-center text-muted">
                        <span>Danh mục</span>
                    </h6>
                </div>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Danh sách danh mục</h6>
                            @foreach ($product->cates as $item)
                            <small class="text-muted">{{$item->cateElement->name}}</small><br>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class=" pt-3 pb-2 mb-3 border-bottom">
                    <h6 class="sidebar-heading d-flex justify-content-center align-items-center text-muted">
                        <span>Mô tả chi tiết</span>
                    </h6>
                </div>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"></h6>
                            @foreach ($product->details as $value)
                            <small class="text-muted"><strong>{{$value->key_detail}}</strong> : {{$value->value_detail}}</small>
                            <br>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Xem : {{$product->name}}</span>
                    <a class="link-secondary text-decoration-none" href="{{route('product.index')}}" aria-label="Add a new report">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </div>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="input-group-text form-control" value="{{ $product->name}}" readonly>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Tên đường dẫn</label>
                        <input type="text" name="slug" class="input-group-text form-control" value="{{ $product->slug }}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Giá sản phẩm</label>
                        <input type="text" id="price" name="price" class="input-group-text form-control" value="{{ $product->price }}" readonly>
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Giá khuyến mãi</label>
                        <input type="text" id="price" name="sale" class="input-group-text form-control" value="{{ $product->sale }}" readonly>
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Số lượng</label>
                        <input type="text" name="quantity" class="input-group-text form-control" value="{{ $product->quantity }}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Danh mục chính</label>
                        <input type="text" name="category_id" class="input-group-text form-control" value="{{ $product->cate->name}}" readonly>
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Hiển thị</label>
                        @if ($product->status == 1)
                        <input type="text" name="status" class="input-group-text form-control" placeholder="Có" value="Có" readonly>
                        @else
                        <input type="text" name="status" class="input-group-text form-control" placeholder="Không" value="Ẩn" readonly>
                        @endif
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Ưu tiên</label>
                        @if ($product->prior == 1)
                        <input type="text" name="prior" class="input-group-text form-control" placeholder="Có" value="Có" readonly>
                        @else
                        <input type="text" name="prior" class="input-group-text form-control" placeholder="Không" value="Không" readonly>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Created At</label>
                        <input type="text" name="created_at" class="input-group-text form-control" placeholder="Created At" value="{{convertTime($product->created_at)}}" readonly>
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Updated At</label>
                        <input type="text" name="updated_at" class="input-group-text form-control" placeholder="Updated At" value="{{convertTime($product->updated_at)}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <img src="{{asset('storage')}}/images/{{$product->image}}" alt="" class="img-thumbnail" style="width: 200px;">
                    </div>
                    @if ($product->images->count()>0)
                    @foreach ($product->images as $item)
                    <div class="col mb-3">
                        <img src="{{asset('storage')}}/images/{{$item->image}}" alt="" class="img-thumbnail" style="width: 200px;">
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="mb-3">
                    <label for="editor" class="col-form-label">Thông tin mô tả</label>
                    <p>{!!$product->description!!}</p>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@section('custom_js')
<script>
    const prices = document.querySelectorAll('#price');
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    prices.forEach(price => {
        const value = price.value;
        price.value = VND.format(value);
    });
</script>
@endsection
