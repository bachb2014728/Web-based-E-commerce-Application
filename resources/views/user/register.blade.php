@extends('user.layouts.app')
@section('main')
<section class="text-center">
    <main class="form-signin">
        <form action="" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Đăng Ký </h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Họ và tên">
                <label for="floatingInput">Nhập tên</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nhập email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Nhập mật khẩu</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng ký</button>
        </form>
        <div id="formFooter">
            <a class="w-100 btn btn-lg btn-primary mt-2" type="submit" href="{{asset('login')}}">Đăng nhập</a>
        </div>
    </main>
</section>
@endsection
