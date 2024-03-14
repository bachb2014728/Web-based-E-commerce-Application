<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="{{asset('node_modules')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('src')}}/css/sign.css" rel="stylesheet">
    <link href="{{asset('src')}}/css/admin.css" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin align-items-center">
    <form action="{{route('auth.post')}}" method="post">
        @csrf
        <h2 class="label mb-3 fw-normal">Đăng nhập vào hệ thống</h2>
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
</main>
</body>
</html>
