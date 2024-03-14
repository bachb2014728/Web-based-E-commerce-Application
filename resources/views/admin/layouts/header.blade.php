<header class="navbar navbar-dark sticky-top bg-white flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-light text-center " href="#">
        <img src="{{asset('image')}}/logo.png" alt="" style="width: 6rem;" >
    </a>
    <button class="navbar-toggler position-absolute text-dark d-md-none collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i data-feather="menu"></i>
    </button>
    <div class="navbar-nav d-none d-md-block ">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3 text-dark" href="{{route('auth.logout')}}"><i data-feather="log-out"></i>Thoát</a>
        </div>
    </div>
</header>

