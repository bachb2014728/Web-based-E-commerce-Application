@extends('admin.layouts.app')
@section('title')
Thông tin
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Thông tin cá nhân</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{asset('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thông tin</li>
            </ol>
        </nav>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    @include('admin.profiles.update-profile')
                </div>
                <div class="col-md">
                    @include('admin.profiles.update-password')
                </div>
                <div class="col-md">
                    @include('admin.profiles.delete')
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('custom_js')

@endsection
