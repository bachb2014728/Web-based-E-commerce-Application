<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="{{asset('node_modules')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('src')}}/css/admin.css" rel="stylesheet">
    <script src="{{asset('src')}}/js/sidebars.js"></script>
    <script src="{{asset('src')}}/js/search.js"></script>
    <script src="{{asset('src')}}/js/slug.js"></script>

    <script src="{{asset('assets\ckeditor\ckeditor.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('custom_css')
</head>
<body>
<div class="container-fluid">
    <div class="row">
        @include('admin.layouts.aside')
        @include('admin.layouts.header')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-2">
            @if (Session::has('success'))
            <div class="content-header">
                <div class="container-fluid">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            @elseif(Session::has('fail'))
            <div class="content-header">
                <div class="container-fluid">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ Session::get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="">
            @yield('home')
        </div>
    </div>
</div>
<script src="{{asset('node_modules')}}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
@yield('custom_js')
</body>
</html>
