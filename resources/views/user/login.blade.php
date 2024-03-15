@extends('user.layouts.app')
@section('main')
<section class="text-center ">
    <main class="form-signin">
        <form action="" method="post">
            @csrf
            <h3 class="mb-3 fw-normal label">Đăng nhập </h3>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nhập email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Nhập mật khẩu</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng nhập</button>
        </form>
        <div id="formFooter">
            <a class="w-100 btn btn-lg btn-primary mt-2" type="submit" href="{{asset('register')}}">Đăng ký</a>
        </div>
    </main>
</section>
@endsection
