@extends('admin.layouts.app')
@section('title')
Thành viên
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí thành viên</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{asset('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thành viên </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                        <span class="card-title">Thông tin tài khoản</span>
                    </h5>
                    <div class="table-responsive" style="height: 300px;">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên đầy đủ</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nghề nghiệp</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->job}}</td>
                                @if ($user->deleted == 0)
                                <td><span class="badge bg-success">Hoạt động</span></td>
                                @else
                                <td><span class="badge bg-danger">Bị khóa</span></td>
                                @endif
                                <td >
                                    <a href="{{ route('member.getOne', $user->id) }}" type="button" class="btn btn-secondary btn-sm">Xem</a>
                                    @if ($user->deleted == false)
                                    <a href="{{route('member.block',$user->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></a>
                                    @else
                                    <a href="{{route('member.block',$user->id)}}" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($users->count() > 0)
                    <p class="text-end m-2"><strong>Tổng số thành viên : <span class="badge bg-secondary">{{$users->count()}}</span></strong></p>
                    @endif
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Danh sách tài khoản xóa</h5>
                    <p class="label">Người dùng đã xóa nhưng dữ liệu vẫn con trên cơ sở dữ liệu</p>
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th>Số đơn hàng</th>
                            <th>Số điện thoại</th>
                            <th scope="col">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $item)
                        @if ($item->deleted == 1)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->hoadon->count()}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('member.getOne', $item->id) }}" type="button" class="btn btn-secondary btn-sm">Xem</a>
                                    <form action="{{ route('member.delete', $item->id) }}" method="post" type="button" class="btn btn-danger btn-sm p-0" onsubmit="return confirm('Bạn chắc chắn xóa người dùng này ?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách hoạt động</h5>
                    <p class="label">5 hoạt động gần nhất của các thành viên</p>
                    <div class="table-responsive" style="height: 200px;">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Hoạt động</th>
                                <th scope="col">Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($new_actions as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>
                                    @foreach ($users as $user)
                                    @if ($user->id == $item->user_id)
                                    {{$user->name}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>{{$item->name_active}}</td>
                                <td>{{convertTime($item->created_at)}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Danh sách tài khoản tạo gần nhất</h5>
                    <p class="label">5 tài khoản gần nhất được người dùng đăng kí</p>
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên nngười dùng</th>
                            <th scope="col">Ngày tạo</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($new_users as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{convertTime($item->created_at)}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
