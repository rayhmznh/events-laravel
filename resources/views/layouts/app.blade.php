<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('frontend/images/logo/Logo - Icon.png') }}">
        @include('includes.style')
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="{{ url('/') }}" class="navbar-brand mx-auto mx-lg-0">
                    <i class="bi-bullseye brand-logo"></i>
                    <span class="brand-text">Gunadarma <br> Event</span>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a target="_blank" class="nav-link click-scroll" href="{{ url('event') }}">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/#section_3') }}">About</a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link custom-btn btn d-none d-lg-block" href="{{ url('register') }}" >Register</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-btn btn d-none d-lg-block" href="{{ url('login') }}">Login</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary" style="border-radius: 25px; padding: 10px 15px; font-weight: 600;">
                                    Logout
                                </button>
                            </form>
                        @endauth
                    </ul>
                <div>
                        
            </div>
        </nav>

        @yield('content')
        @yield('detail-content')
        @include('includes.footer')

        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

    </body>
</html>