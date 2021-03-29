<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ind-Swift | Admin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    @yield('customcss')
</head>

<body class="hold-transition sidebar-mini">
    {{-- start menu --}}
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('register') }}" class="nav-link">register</a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Left menu Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('assets/images/main.png') }}" alt="Ind-Swift"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Ind-Swift</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Investor
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/investor" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>investor</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/home" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/aboutus" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>
                                    about us
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        {{-- end of menu --}}


        @yield('content-body')

        {{-- start body --}}


        {{-- end body --}}


        {{-- start footer --}}
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                www.indswiftltd.com
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="https://confianzamedia.com/">confianza media</a>.</strong> All
            rights
            reserved.
        </footer>
    </div>
    <script src="{{ asset('adminLTE/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminLTE/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminLTE/js/adminlte.min.js') }}"></script>
    @yield('customjs')
</body>

</html>
