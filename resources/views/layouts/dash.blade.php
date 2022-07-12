<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('frontend/images/logo/Logo - Icon.png') }}">
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    @include('includes.styledash')
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <a>
                    <img src="{{ url('frontend/images/logo/logo.png') }}" style="max-width:200px" alt="homepage"/>
                </a>
            </div>
            
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class=" in">
                        <div class="app-search d-none d-md-block me-3 text-white">
                            Halo, {{ Auth::user()->name }}
                        </div>
                    </li>

                    <li>
                        <div class="profile-pic" href="#">
                            <img src="{{ url('frontend/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle">
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('dashboard') }}"
                            aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('profile') }}"
                            aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('all-event') }}"
                            aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Events</span>
                        </a>
                    <li class="text-center p-20 upgrade-btn">
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary" style="width: 100%; font-weight: 600;">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav> 
        </div>

    </div>
    </aside>

    @yield('dash')
    @yield('profile')
    @yield('event-dashboard')
    @yield('add-event')
    @include('includes.footerdash')
    @include('includes.scriptdash')

</body>