@extends('admin.layouts.app')
@section('title')
Sản phẩm - Chỉnh sửa
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sản phẩm</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('product.index')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa : {{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <section class="content">
        <div class="container-fluid">
            <caption>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Chỉnh sửa : {{$product->name}}</span>
                    <a class="link-secondary text-decoration-none" href="{{route('product.index')}}">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </caption>
            <div class="card">
                <div class="card-header text-center">
                    <span class="text-muted h6">{{$product->name}}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-5">
                            <div class="col-md-4 col-lg-4 order-md-last">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0 mb-2">Danh sách danh mục</h6>
                                            <div class="table-responsive" style="height: 400px; width: 22em">
                                                <table>
                                                    @foreach ($category as $value)
                                                    <input class="form-check-input" type="checkbox" name="cate[]" id="cate_{{$value->id}}" value="{{$value->id}}"
                                                           @foreach ($listCate as $item)
                                                           @if ($value->id == $item->category_id && $product->id == $item->product_id)
                                                    checked
                                                    @endif
                                                    @endforeach
                                                    >
                                                    <label class="form-check-label text-muted" for="cate_{{$value->id}}">
                                                        @php
                                                        $string='';
                                                        for ($i=0; $i < $value->level; $i++) {
                                                        echo $string;
                                                        $string .= '--';
                                                        }
                                                        @endphp
                                                        {{$value->name}}
                                                    </label>
                                                    <br>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <div class="pb-2 mb-3 border-bottom">
                                    <div class="row">
                                        <div class="col-sm-6 form-group @error('name') has-error @enderror">
                                            <label class="col-form-label" for="name">Tên sản phẩm</label>
                                            <input type="text" id="name" name="name"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   value="{{$product->name}}"
                                                   placeholder="Nhập tên sản phẩm tại đây" onkeyup="ChangeToSlug()">
                                            @error('name')
                                            <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="col-form-label" for="slug">Đường dẫn</label>
                                            <input type="text" id="slug" name="slug"
                                                   class="form-control  @error('slug') is-invalid @enderror"
                                                   value="{{$product->slug}}"
                                                   placeholder="Nhập slug tại đây" >
                                            @error('slug')
                                            <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm form-group">
                                            <label class="col-form-label" for="price">Giá sản phẩm</label>
                                            <input type="text" id="price" name="price"  class="form-control" value="{{$product->price}}" placeholder="Nhập giá sản phẩm tại đây">
                                        </div>
                                        <div class="col-sm form-group">
                                            <label class="col-form-label" for="price">Giá khuyến mãi</label>
                                            <input type="text" id="price" name="sale"  class="form-control" value="{{$product->sale}}" placeholder="Nhập giá sale tại đây">
                                        </div>
                                        <div class="col-sm form-group">
                                            <label class="col-form-label" for="price">Số lượng</label>
                                            <input type="number" id="quantity" name="quantity"  class="form-control" value="{{$product->quantity}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <span>Bạn muốn hiện thị không ?</span>
                                            {!!$product->status
                                            ? ' <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked="checked">
                                                <label class="form-check-label" for="status1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                                                <label class="form-check-label" for="status2">Ẩn</label>
                                            </div>'
                                            : ' <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1" value="1">
                                                <label class="form-check-label" for="status1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2" value="0" checked="checked">
                                                <label class="form-check-label" for="status2">Ẩn</label>
                                            </div>'!!}
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <span>Bạn muốn ưu tiên không ?</span>
                                            {!!$product->prior
                                            ? ' <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior1" value="1" checked="checked">
                                                <label class="form-check-label" for="prior1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior2" value="0">
                                                <label class="form-check-label" for="prior2">Ẩn</label>
                                            </div>'
                                            : ' <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior1" value="1">
                                                <label class="form-check-label" for="prior1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior2" value="0" checked="checked">
                                                <label class="form-check-label" for="prior2">Không</label>
                                            </div>'!!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="image" class="form-label">Thêm ảnh chính</label>
                                            <input class="form-control" name="image" type="file" id="image">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label for="images" class="form-label">Thêm ảnh mô tả</label>
                                            <input class="form-control" name="images[]" type="file" id="images" multiple>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editor1" class="col-form-label">Thông tin mô tả</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="10" cols="100">{{$product->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-rounded btn-block">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('custom_js')
<script>CKEDITOR.replace('editor1');</script>
@endsection
