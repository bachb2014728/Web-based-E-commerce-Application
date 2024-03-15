@extends('user.layouts.app')
@section('title')
Thông tin
@endsection
@section('main')
<div class="pagetitle">
    <h1>Thông tin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Thông tin</li>
        </ol>
    </nav>
</div>
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{asset('image')}}/user.jpg" alt="Profile" class="rounded-circle" style="width: 70px">
                    <h2>{{Auth::user()->name}}</h2>
                    <h3>{{Auth::user()->job}}</h3>
                    <div class="social-links mt-2">
                        <a href="{{Auth::user()->twitter}}" class="twitter"><span class="text-dark" data-feather="twitter"></span></a>
                        <a href="{{Auth::user()->facebook}}" class="facebook"><span class="text-dark" data-feather="facebook"></span></a>
                        <a href="{{Auth::user()->instagram}}" class="instagram"><span class="text-dark" data-feather="instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Tổng quan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Chỉnh sửa thông tin</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" tabindex="-1" role="tab">Thêm địa chỉ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Thay đổi mật khẩu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-delete-user" aria-selected="false" tabindex="-1" role="tab">Xóa tài khoản</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                            @include('user.profiles.tab1')
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                            @include('user.profiles.tab2')
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">
                            @include('user.profiles.tab3')
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                            @include('user.profiles.tab4')
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-delete-user" role="tabpanel">
                            <div class="card-body">
                                <h2 class="text-lg font-medium text-gray-900 label">Bạn có chắc chắn muốn xóa tài khoản của mình không?</h2>
                                <p class="mt-1 text-sm text-gray-600">Khi tài khoản của bạn bị xóa,
                                    tất cả các tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn.
                                    Vui lòng nhập mật khẩu của bạn để xác nhận rằng bạn muốn xóa tài khoản của mình vĩnh viễn.
                                </p>
                                <button class="btn m-0 btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal_dele">Xóa tài khoản</button>
                                <div class="modal fade" id="exampleModal_dele" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xác thực người dùng</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('profile.delete') }}" method="GET">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="recipient-pass" class="col-form-label">Nhập mật khẩu:</label>
                                                        <input type="password" class="form-control" id="recipient-pass" name="password">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Xóa tài khoản</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách địa chỉ nhận</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên người nhận</th>
                            <th>Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (Auth::user()->diachi as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn m-0 btn-sm" data-toggle="modal" data-target="#exampleModal_{{$loop->iteration}}"><i data-feather="edit"></i></button>
                                    <div class="modal fade" id="exampleModal_{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa địa chỉ nhận</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('profile.updateAddress', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Tên người nhận:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="name" value="{{$item->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="address" value="{{$item->address}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="phone" value="{{$item->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-warning btn-sm ">Cập nhật</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('profile.deleteAddress', $item->id) }}" method="POST" type="button" onsubmit="return confirm('Bạn chắc chắn xóa địa chỉ chứ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn m-0 btn-sm"><i data-feather="trash-2"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom_js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    const prices = document.querySelectorAll('#price');
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    prices.forEach(price => {
        const value = price.textContent;
        price.textContent = VND.format(value);
    });
</script>
@endsection
