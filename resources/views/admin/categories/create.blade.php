@extends('admin.layouts.app')
@section('title')
Danh mục - Tạo
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Danh mục</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('category.index')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
            </ol>
        </nav>
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-center align-items-center text-muted">
                    <span>Danh mục</span>
                </h6>
            </div>
            <ul class="list-group mb-3" style="height:100vh;overflow-y:auto">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Danh sách danh mục anh em</h6>
                        @foreach ($category as $value)
                        <span class="d-inline-block bg-success rounded-circle p-1"></span>
                        <small class="text-muted">
                            @php
                            $string='';
                            for ($i=0; $i < $value->level; $i++) {
                            echo $string;
                            $string .= '--';
                            }
                            @endphp
                            {{$value->name}}
                        </small>
                        <br>
                        @endforeach
                    </div>
                    <span class="text-muted">{{count($category)}}</span>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Thêm danh mục</span>
                    <a class="link-secondary text-decoration-none" href="{{route('category.index')}}" aria-label="Add a new report">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </div>
            <form action="{{ route('category.save')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 form-group @error('name') has-error @enderror">
                        <label class="col-form-label" for="name">Tên danh mục</label>
                        <input type="text" id="name" name="name"  class="form-control  @error('name') is-invalid @enderror" placeholder="Nhập tên danh mục tại đây" onkeyup="ChangeToSlug()">
                        @error('name')
                        <div class="invalid-feedback">
                            <strong><i data-feather="alert-triangle"></i>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="col-form-label" for="slug">Đường dẫn</label>
                        <input type="text" id="slug" name="slug"  class="form-control  @error('slug') is-invalid @enderror" placeholder="Nhập đường dẫn danh mục tại đây" >
                        @error('slug')
                        <div class="invalid-feedback">
                            <strong><i data-feather="alert-triangle"></i>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col form-group ">
                    <label class="col-form-label" for="mota">Mô tả ngắn gọn</label>
                    <input type="text" id="mota" name="mota"  class="form-control  "placeholder="Nhập mô tả tại đây">
                </div>
                <div class="col form-group">
                    <label for="mota" class="col-form-label">Danh mục chung</label>
                    <select class="form-select" name="parent_cate" id="parent_cate">
                        <option selected value="">Chọn danh mục</option>

                        @foreach ($category as $key =>$val)
                        <option value="{{$val->id}}">
                            @php
                            $string='';
                            for ($i=0; $i < $val->level; $i++) {
                            echo $string;
                            $string .= '--';
                            }
                            @endphp
                            {{$val->name}}
                        </option>
                        @endforeach

                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 form-group">
                        <label for="status" class="col-form-label">Bạn muốn hiện thị không ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked="checked">
                            <label class="form-check-label" for="status1">Có</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                            <label class="form-check-label" for="status2">Ẩn</label>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="prior" class="col-form-label">Bạn muốn ưu tiên không ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prior" id="prior1" value="1" checked="checked">
                            <label class="form-check-label" for="prior1">Có</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prior" id="prior2" value="0">
                            <label class="form-check-label" for="prior2">Không</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-rounded btn-block">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@section('custom_js')
@endsection
