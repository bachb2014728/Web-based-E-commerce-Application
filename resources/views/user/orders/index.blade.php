@extends('user.layouts.app')
@section('title')
Đơn hàng
@endsection
@section('main')
<div class="card">
    <div class="card-body pt-3">
        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link-2 active label" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Tất cả đơn hàng</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-2 label" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Chờ xác nhận</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link-2 label" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" tabindex="-1" role="tab">Đã đặt hàng</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link-2 label" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Hủy đơn hàng</button>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                @include('user.orders.labs.lab1')
            </div>

            <div class="tab-pane fade profile-edit" id="profile-edit" role="tabpanel">
                @include('user.orders.labs.lab2')
            </div>

            <div class="tab-pane fade" id="profile-settings" role="tabpanel">
                @include('user.orders.labs.lab3')
            </div>

            <div class="tab-pane fade" id="profile-change-password" role="tabpanel">
                @include('user.orders.labs.lab4')

            </div>

        </div>

    </div>
</div>
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
