@extends('admin.layouts.app')
@section('title')
Sản phẩm
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí sản phẩm </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm </li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title ">Danh sách sản phẩm</h5>
                <a class="btn btn-primary btn-sm text-decoration-none" href="{{ route('product.create') }}">
                    <span class="d-block d-sm-none" data-feather="plus-circle"></span>
                    <span class="d-none d-sm-block ">Thêm sản phẩm</span>
                </a>
            </div>
            <table class="table table-sm table-bordered ">
                <thead class="thead">
                <tr class="text-center ">
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Danh mục gốc</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody id="myTable" class="tbody">
                @if($product->count() > 0)
                @foreach($product as $item)
                <tr class="text-center align-middle tr">
                    <td>{{ $loop->iteration }}</td>
                    <td class="fs-6">{{ $item->name }}</td>
                    <td>
                        <img src="{{ url('storage/images/'.$item->image) }}" style="height: 4rem;">
                    </td>
                    <td id="price">{{ $item->price }}</td>
                    <td>
                        @foreach ($category as $dm)
                        @if ($dm->id == $item->category_id)
                        {{$dm->name}}
                        @endif
                        @endforeach
                    </td>
                    <td class="text-nowrap">
                        <a href="{{route('product.createDetail',$item->id)}}" type="button" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Thêm mô tả chi tiết tại đây"><i data-feather="file-plus"></i></a>
                        <a href="{{ route('product.getOne', $item->id) }}" type="button" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Xem chi tiết sản phẩm tại đây"><i data-feather="eye"></i></a>
                        <a href="{{ route('product.edit', $item->id)}}" type="button" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Cập nhập sản phẩm tại đây"><i data-feather="edit"></i></a>
                        <form action="{{ route('product.delete', $item->id) }}" method="POST" type="button" class="btn btn-danger btn-sm p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm m-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa sản phẩm"><i data-feather="trash-2"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="7"> Sản phẩm  không tồn tại</td>
                </tr>
                @endif
                </tbody>
            </table>
            <div style="margin-top:1rem; margin-left:.7rem">
                <div class="row">
                    <h5 class="card-title col-sm">Có tất cả <span class="badge bg-info text-dark">{{$product->count()}}</span> sản phẩm</h5>
                    <div class="card-tools col-sm-4">
                        <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm sản phẩm tại đây">
                    </div>
                </div>
            </div>
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
