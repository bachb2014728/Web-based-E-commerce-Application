@extends('admin.layouts.app')
@section('title')Danh mục @endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí danh mục</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title ">Danh sách danh mục</h5>
                <a class="btn btn-primary btn-sm text-decoration-none" href="{{route('category.create')}}" aria-label="Add a new category">
                    <span class="d-block d-sm-none" data-feather="plus-circle"></span>
                    <span class="d-none d-sm-block">Thêm danh mục</span>
                </a>
            </div>
            <table class="table table-sm table-bordered">
                <thead class="thead">
                <tr class="text-center">
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Danh mục cha</th>
                    <th>Đường dẫn</th>
                    <th>Hiển thị</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody id="myTable" class="tbody">
                    @if($category->count() > 0)
                        @foreach($category as $item)
                        <tr class="align-middle text-center tr">
                            <td>{{ $loop->iteration }}</td>
                            <td class="position-relative">
                                {{$item->name}}
                                @if ($time->diffInDays($item->created_at)==0 && $item->created_at !=null)
                                <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger">New</span>
                                @endif
                            </td>
                            <td>
                                @if ($item->parent_cate == 0)
                                    <span></span>
                                @else
                                    @foreach ($categories as $item2)
                                        @if ($item2->id == $item->parent_cate)
                                        <span>{{$item2->name}}</span>
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td>{{$item->slug}}</td>
                            <td>{!!$item->status ? '<span class="badge bg-success">Có</span>' : '<span class="badge bg-danger">Ẩn</span>'!!}</td>
                            <td  class="text-nowrap">
                                <a href="{{ route('category.getOne', $item->id) }}" type="button" class="btn btn-secondary btn-sm"><i data-feather="file"></i></a>
                                <a href="{{ route('category.edit', $item->id)}}" type="button" class="btn btn-success btn-sm"><i data-feather="edit"></i></a>
                                <form action="{{ route('category.delete', $item->id) }}"
                                      method="POST" type="button" class="btn btn-danger btn-sm p-0" onsubmit="return confirm('Bạn có chắc chắn xóa danh mục này không ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm m-0"><i data-feather="trash-2"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Danh mục không tồn tại</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="p-2">
                <div class="row">
                    <h5 class="card-title col-sm"> Có tất cả <span class="badge bg-info text-dark">{{$category->count()}}</span> danh mục</h5>
                    <div class="card-tools col-sm-4">
                        <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm danh mục tại đây">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
