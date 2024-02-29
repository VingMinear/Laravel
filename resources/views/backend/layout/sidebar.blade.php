<aside
class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
id="sidenav-main">
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{url('/admin')}}">
        <center><img src="{{ asset('logo.png') }}" class="navbar-brand-img h-200" alt="main_logo"></center>
    </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link @yield('active')" href="{{url('/admin')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('active')"  href="{{url('/admin/table')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link "  href="{{url('/admin/create-room')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Create Room</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ asset('pages/virtual-reality.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-app text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ asset('pages/rtl.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">RTL</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ asset('pages/profile.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ asset('pages/sign-in.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sign In</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ asset('pages/sign-up.html') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-collection text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sign Up</span>
            </a>
        </li>
    </ul>
</div>
<div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="{{ asset('assets/img/illustrations/icon-documentation.svg') }}"
            alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
                <h6 class="mb-0">Need help?</h6>
                <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
        </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank"
        class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>

</div>
</aside>