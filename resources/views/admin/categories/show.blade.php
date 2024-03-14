@extends('admin.layouts.app')
@section('title')
Danh mục - Xem
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Danh mục</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('category.index')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Xem : {{$category->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-center align-items-center text-muted">
                    <span>Danh mục con cháu</span>
                </h6>
            </div>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Danh mục con đến gốc</h6>
                        @if ($category->parent_cate == 0)
                        <small class="text-muted">Đây là danh mục gốc.</small>
                        @else
                        @foreach ($dfs as $value)
                        <span class="d-inline-block bg-danger rounded-circle p-1"></span>
                        <small class="text-muted">
                            @php
                            $string='';
                            for ($i=0; $i < $value->level ; $i++) {
                            echo $string;
                            $string .= '--';
                            }
                            @endphp
                            {{$value->name}}
                        </small>
                        <br>
                        @endforeach
                        @endif
                    </div>
                    <span class="text-muted ">
            @if ($dfs !== null)
            {{count($val)}}
            @endif
          </span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm" >
                    <div>
                        <h6 class="my-0">Danh sách danh mục anh em</h6>
                        <div class="table-responsive" style="height: 300px; width: 22em">
                            <table>
                                @foreach ($categories as $value)
                                <span class="d-inline-block {{$value->id == $category->id ? 'bg-danger' : 'bg-success'}} rounded-circle p-1"></span>
                                <small class="text-muted">
                                    @php
                                    $string='';
                                    for ($i=0; $i < $value->level; $i++) {
                                    echo $string;
                                    $string .= '--';
                                    }
                                    @endphp
                                    @if ($value->id == $category->id)
                                    <strong class="text-danger">{{$value->name}}</strong>
                                    @else
                                    {{$value->name}}
                                    @endif
                                </small>
                                <br>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <span class="text-muted">{{count($categories)}}</span>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Xem : {{$category->name}}</span>
                    <a class="link-secondary text-decoration-none" href="{{route('category.index')}}" aria-label="Add a new report">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </div>
            <form class="needs-validation" novalidate>
                <div class="row g-3 ">
                    <div class="col-sm-6">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <span class="input-group-text form-control" name="name" >{{ $category->name }}</span>
                    </div>

                    <div class="col-sm-6">
                        <label for="slug" class="form-label">Đường dẫn</label>
                        <span class="input-group-text form-control" name="slug" >{{ $category->slug }}</span>
                    </div>


                    <div class="col-12">
                        <label for="desciption" class="form-label">Mô tả <span class="text-muted">(Ngắn gọn)</span></label>
                        @if ($category->desciption == '' || $category->desciption == null)
                        <span class="input-group-text form-control" name="desciption" >Không có mô tả!</span>
                        @else
                        <span class="input-group-text form-control" name="desciption" >{{ $category->desciption }}</span>
                        @endif
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Hiển thị</label>
                        @if ($category->status == 1)
                        <span class="input-group-text form-control" name="status" >Có</span>
                        @else
                        <span class="input-group-text form-control" name="status" >Ẩn</span>
                        @endif
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Ưu tiên</label>
                        @if ($category->prior == 1)
                        <span class="input-group-text form-control" name="prior">Có</span>
                        @else
                        <span class="input-group-text form-control" name="prior">Không</span>
                        @endif
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Thời gian tạo</label>
                        @if ($category->created_at == NULL )
                        <span class="input-group-text form-control" name="created_at">NULL</span>
                        @else
                        <span class="input-group-text form-control" name="created_at">{{convertTime($category->created_at) }}</span>
                        @endif
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Thời gian cập nhật</label>
                        @if ($category->updated_at == NULL)
                        <span class="input-group-text form-control" name="created_at">NULL</span>
                        @else
                        <span class="input-group-text form-control" name="created_at">{{convertTime($category->updated_at) }}</span>
                        @endif
                    </div>
            </form>

        </div>
    </div>
</main>
@endsection
