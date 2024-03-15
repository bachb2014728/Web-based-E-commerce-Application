@extends('admin.layouts.app')
@section('title')
Thành viên - Xem chi tiết
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Thành viên - Xem chi tiết</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{asset('admin')}}">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('member.index')}}">Thành viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Xem : {{$users->name}}</li>
            </ol>
        </nav>
    </div>
    <div id="body" class="row g-5">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{asset('image')}}/user.jpg" alt="Profile" class="rounded-circle" style="width: 70px">
                    <span class="label h5 mt-2">{{$users->name}}</span>
                    <span class="label">Tổng tiền mua hàng : </span>
                    <h6 id="price" class="label">{{$prices}}</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2 active" data-bs-toggle="tab" data-bs-target="#lab-1" aria-selected="true" role="tab">Tổng quan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2" data-bs-toggle="tab" data-bs-target="#lab-2" aria-selected="false" tabindex="-1" role="tab">Lịch sử mua hàng</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2" data-bs-toggle="tab" data-bs-target="#lab-3" aria-selected="false" tabindex="-1" role="tab">Lịch sử hoạt động</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2" data-bs-toggle="tab" data-bs-target="#lab-4" aria-selected="false" tabindex="-1" role="tab">Danh sách địa chỉ nhận</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2" data-bs-toggle="tab" data-bs-target="#lab-5" aria-selected="false" tabindex="-1" role="tab">Phản hồi của thành viên</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-2" data-bs-toggle="tab" data-bs-target="#lab-6" aria-selected="false" tabindex="-1" role="tab">Đánh giá của thành viên</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="lab-1" role="tabpanel">
                            @include('admin.members.tabs.tab1')
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="lab-2" role="tabpanel">
                            @include('admin.members.tabs.tab2')
                        </div>
                        <div class="tab-pane fade pt-3" id="lab-3" role="tabpanel">
                            @include('admin.members.tabs.tab3')
                        </div>
                        <div class="tab-pane fade pt-3" id="lab-4" role="tabpanel">
                            @include('admin.members.tabs.tab4')
                        </div>
                        <div class="tab-pane fade pt-3" id="lab-5" role="tabpanel">
                            @include('admin.members.tabs.tab5')
                        </div>
                        <div class="tab-pane fade pt-3" id="lab-6" role="tabpanel">
                            @include('admin.members.tabs.tab6')
                        </div>
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
