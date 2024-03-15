<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-success m-3" href="{{route('profile.index')}}"> <i data-feather="user"></i>
                    {{Auth::user()->name}}
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                <span>Interface</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('admin.index')}}">
                    <span data-feather="home"></span>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i data-feather="feather" class="text-success"></i>
                    Danh mục
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.index')}}">
                    <span data-feather="shopping-cart"></span>
                    Sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('member.index')}}">
                    <span data-feather="users"></span>
                    Thành viên
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('order.index')}}">
                    <span data-feather="shopping-bag"></span>
                    Đơn hàng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/')}}">
                    <span data-feather="bar-chart-2"></span>
                    Chuyển hướng người dùng
                </a>
            </li>
            <li class="nav-item d-block d-md-none">
                <a class="nav-link" href="{{route('auth.logout')}}"><i data-feather="log-out"></i>Thoát</a>
            </li>
        </ul>
    </div>
</nav>
