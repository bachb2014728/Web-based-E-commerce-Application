<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">
    <link href="{{asset('node_modules')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('custom_css')
    <link href="{{asset('src')}}/css/sign.css" rel="stylesheet">
    <link href="{{asset('src')}}/css/auth.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    @if (session('success'))
    <div class="toast show align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @elseif (session('fail'))
    <div class="toast show align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('fail') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif

</div>
@include('user.layouts.header')
<div class="mt-2">
    <div class="row">
        <div class="col-2">
            @include('user.layouts.left')
        </div>
        <div class="col-8">
            @yield('main')
        </div>
        <div class="col-2"></div>
    </div>
</div>
{{-- @include('user.layouts.footer') --}}
</body>
<script src="{{asset('node_modules')}}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
@yield('custom_js')
<script src="{{asset('src')}}/js/cheatsheet.js"></script>
<script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl, { autohide: true })
    });
    toastList.forEach(toast => toast.show());
</script>
</html>
