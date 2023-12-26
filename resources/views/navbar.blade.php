@extends('layout.index')

@section('navbar')
    <nav class="navbar navbar-expand-lg  bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand me-2" href="{{ url('/home') }}">
                <img src="logo.png" height="40" alt="Logo" loading="lazy" style="margin-top: -1px;" />
            </a>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-dark active" aria-current="page" href="{{ url('/home') }}">Dashboard</a>
                    <a class="nav-link text-dark" href="{{ url('/product') }}">Product</a>
                    <a class="nav-link text-dark" href="{{ url('/service') }}">Service</a>
                    <a class="nav-link text-dark" href="{{ url('/event') }}">Event</a>
                    <a class="nav-link text-dark" href="{{ url('/contact?phone=0974278786') }}">Contact</a>
                    <a class="nav-link text-dark" href="{{ url('/about-us') }}">About Us</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2 nav-link text-dark">
                    Login
                </button>
                <a data-mdb-ripple-init class="btn btn-primary px-3 " href="{{ url('/register') }}" role="button">Register
                    for free</i></a>
            </div>
        </div>
        </div>
    </nav>
@endsection
