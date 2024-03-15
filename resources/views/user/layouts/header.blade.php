<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="{{route('index')}}" class="nav-link link-dark px-2 active" aria-current="page">Trang chủ</a></li>
            <li class="nav-item"><a href="{{route('sanpham.index')}}" class="nav-link link-dark px-2">Sản phẩm</a></li>
            {{-- <li class="nav-item"><a href="{{route('order.home')}}" class="nav-link link-dark px-2">Diễn đàn</a></li> --}}
            @if (Auth::check())
            <li class="nav-item"><a href="{{route('order.home')}}" class="nav-link link-dark px-2">Đơn hàng</a></li>
            @endif
        </ul>
        @if (Auth::check())
        <div class="col-4 d-flex justify-content-end align-items-center">

            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item label" href="{{route('profile.index')}}"> <i class="fa fa-drivers-license-o"></i> Thông tin</a></li>
                    @if (Auth::user()->role == 1)
                    <li><a class="dropdown-item label" href="{{route('admin.index')}}"><i class="fa fa-database"></i> Chuyển hướng sang admin</a></li>
                    @endif
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item label" href="{{asset('logout')}}"><i class="fa fa-sign-out"></i> Thoát</a></li>
                </ul>
            </div>
        </div>
        @else
        <ul class="nav">
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link link-dark px-2">Đăng nhập</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link link-dark px-2">Đăng kí</a></li>
        </ul>
        @endif
    </div>
    <header class="py-3 ">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="{{route('index')}}" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <img src="{{asset('image')}}/logo.png" alt="" style="width: 6rem;" >
            </a>
            <a class="link-secondary col-lg-auto mb-3 mb-lg-0 text-dark text-decoration-none" href="{{route('cart.index')}}">
                <div class="cart-icon">
                    <div type="button" class="btn position-relative">
                        <span class="text-dark" data-feather="shopping-cart"></span>
                        @if ($cart->getTotalQuantity()>0)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <span class="quantity">{{$cart->getTotalQuantity()}}</span>
              </span>
                        @endif
                    </div>
                </div>
            </a>
        </div>
    </header>
</nav>
